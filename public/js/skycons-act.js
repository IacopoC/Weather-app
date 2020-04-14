let icons = new Skycons({"monochrome": false}),
    list  = [
        "clear-day",
        "clear-night",
        "partly-cloudy-day",
        "partly-cloudy-night",
        "cloudy",
        "rain",
        "showers-day",
        "showers-night",
        "sleet",
        "rain-snow",
        "rain-snow-showers-day",
        "rain-snow-showers-night",
        "snow",
        "snow-showers-day",
        "snow-showers-night",
        "wind",
        "fog",
        "thunder",
        "thunder-rain",
        "thunder-showers-day",
        "thunder-showers-night",
        "hail"
    ],
    i;

for(i = list.length; i--; ) {
    var weatherType = list[i],
        elements = document.getElementsByClassName( weatherType );
    for (e = elements.length; e--;){
        icons.set( elements[e], weatherType );
    }
}
icons.play();
