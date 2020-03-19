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

    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            long = position.coords.longitude;
            lat = position.coords.latitude;

            const api_key = weather_api_key;
            const proxy = `https://cors-anywhere.herokuapp.com/`;
            const api = `${proxy}https://api.darksky.net/forecast/${api_key}/${lat},${long}?units=si`;
            fetch(api)
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    console.log(data) ;
                    const {temperature,summary,pressure,uvIndex, precipProbability} = data.currently;
                    const location = data.timezone;

                    showTitle();

                    rainProb.textContent = `Rain prob: ${precipProbability} %`;
                    indexDegree.textContent = `Uv Index ${uvIndex}`;
                    pressureDegree.textContent = `Pressure: ${pressure} mb`;
                    temperatureDegree.textContent = `Temp: ${temperature} C°`;
                    temperatureDescription.textContent = `Current summary: ${summary}`;
                    locationTimezone.textContent = `Timezone: ${location}`;


                })
                .catch(error => console.log("Si è verificato un errore"))
        })
    } else {
        alert('Non hai accesso alla geolocalizzazione');
    }
});
