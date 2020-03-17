document.getElementById("geolocation").addEventListener('click', function() {
    let long;
    let lat;
    let temperatureDescription = document.querySelector('.temperature-description');
    let temperatureDegree = document.querySelector('.temperature-degree');
    let pressureDegree = document.querySelector('.pressure-degree');
    let locationTimezone = document.querySelector('.location-timezone');
    let indexDegree = document.querySelector('.uvindex-degree');

    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            long = position.coords.longitude;
            lat = position.coords.latitude;

            const api_key = `127984c3a1de4f4c861f0f9bab4fe831`;
            const proxy = `https://cors-anywhere.herokuapp.com/`;
            const api = `${proxy}https://api.darksky.net/forecast/${api_key}/${lat},${long}?units=si`;
            fetch(api)
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    console.log(data) ;
                    const {temperature,summary,pressure,uvIndex} = data.currently;
                    const location = data.timezone;

                    indexDegree.textContent = uvIndex + ' uvIndex';
                    pressureDegree.textContent = pressure + ' mb';
                    temperatureDegree.textContent = temperature + ' C°';
                    temperatureDescription.textContent = summary;
                    locationTimezone.textContent = 'Timezone: ' + location;


                })
                .catch(error => console.log("Si è verificato un errore"))
        })
    } else {
        alert('Non hai accesso alla geolocalizzazione');
    }
});
