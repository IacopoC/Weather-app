function timeConverter(UNIX_timestamp){

    let a = new Date(UNIX_timestamp * 1000);
    let months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    let year = a.getFullYear();
    let month = months[a.getMonth()];
    let date = a.getDate();
    let time = date + ' ' + month + ' ' + year;
    return time;
}



function showTitle() {
    let element = document.getElementById("title-currentw");
    element.classList.remove("d-none");
}

document.getElementById("geolocation").addEventListener('click', function() {
    let long;
    let lat;

    let rainProb = document.querySelector('.rain-prob');
    let temperatureDescription = document.querySelector('.temperature-description');
    let temperatureDegree = document.querySelector('.temperature-degree');
    let pressureDegree = document.querySelector('.pressure-degree');
    let locationTimezone = document.querySelector('.location-timezone');
    let indexDegree = document.querySelector('.uvindex-degree');
    let dailySummary = document.querySelector('.daily-summary');
    let titleDaily = document.querySelector('.title-week');

    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            long = position.coords.longitude;
            lat = position.coords.latitude;

            const api_key = weather_api_key;
            const proxy = `https://cors-anywhere.herokuapp.com/`;
            const api = `${proxy}https://api.darksky.net/forecast/${api_key}/${lat},${long}?units=si&lang=it`;
            fetch(api)
                .then(response => {
                    return response.json();
                })
                .then(data => {

                    const {temperature,summary,pressure,uvIndex, precipProbability} = data.currently;
                    const location = data.timezone;

                    showTitle();

                    rainProb.textContent = `Pioggia: ${precipProbability} %`;
                    indexDegree.textContent = `Indice Uv: ${uvIndex}`;
                    pressureDegree.textContent = `Pressione: ${pressure} mb`;
                    temperatureDegree.textContent = `Temp: ${temperature} C°`;
                    temperatureDescription.textContent = `${summary}`;
                    locationTimezone.textContent = `Fuso orario: ${location}`;
                    titleDaily.textContent = `Tempo della settimana`;

                    data.daily.data.forEach(function (data) {
                        console.log(data);
                        let timeDate = data['time'];

                       dailySummary.innerHTML += "<div class='pt-4 pb-4 mb-3 col-md-3 bg-light'><p><strong>" + timeConverter(timeDate) + "</strong></p><p> " + data['summary'] +
                             "</p><p>Pressione: " + data['pressure'] + "</p><p>Umidità: " + data['humidity'] +
                             "</p><p>Vento: " + data['windSpeed'] + "km/h</p></div>";
                    });

                })
                .catch(error => console.log("Si è verificato un errore"))
        })
    } else {
        alert('Non hai accesso alla geolocalizzazione');
    }
});
