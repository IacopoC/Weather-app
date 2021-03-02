
function timeConverter(unixTimestamp) {
    let a = new Date(unixTimestamp * 1000);
    let months = ['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Aug','Set','Ott','Nov','Dic'];
    let year = a.getFullYear();
    let month = months[a.getMonth()];
    let date = a.getDate();
    return date + ' ' + month + ' ' + year;
}

function hideLoader() {
  let hideLoader = document.getElementById('loader');
  hideLoader.classList.add('d-none');
}

document.addEventListener('DOMContentLoaded',function() {
    let long;
    let lat;

    let temperatureDescription = document.querySelector('.temperature-description');
    let temperatureDegree = document.querySelector('.temperature-degree');
    let locationDate = document.querySelector('.location-date');
    let locationData = document.querySelector('.location-data');

    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            long = position.coords.longitude;
            lat = position.coords.latitude;

            const api_key = weather_api_key;
            const location_key = google_location_key;
            const api = `https://api.darksky.net/forecast/${api_key}/${lat},${long}?units=si&lang=it`;
            const api_location = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${long}&key=${location_key}`;

            hideLoader();

            fetch(api_location)
                .then(response => {
                    return response.json();
                })

                .then(location_data => {

                    let {compound_code} = location_data.plus_code;
                    let compound_short = compound_code.slice(7);

                    locationData.innerHTML = '<a class="text-white" href="/search?q=' + compound_short + '">' + compound_short + '</a>';

                })

                .catch(error => console.log("Errore nel mostrare indizzo geolocalizzato"));

            fetch(api)
                .then(response => {
                    return response.json();
                })
                .then(data => {

                    const {temperature,summary,icon,time} = data.currently;

                    setIcons(icon, document.getElementsByClassName("icon1")[0]);

                    temperatureDegree.textContent = `Temp: ${temperature} C°`;
                    temperatureDescription.textContent = `${summary}`;
                    locationDate.textContent = `${timeConverter(time)}`;

                })
                .catch(error => console.log("Errore nel mostrare dati meteo"))
        })
    } else {
        alert('Non hai accesso alla geolocalizzazione');
    }
});

function setIcons(icon, iconID) {
    const skycons = new Skycons({"monochrome": false});
    const currentIcon = icon.replace(/-/g,"_").toUpperCase();
    skycons.play();
    return skycons.set(iconID, Skycons[currentIcon]);
}
