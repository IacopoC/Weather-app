<!-- Bootstrap core JavaScript -->
<script>
    const weather_api_key = "{{ env('WEATHER_DATABASE_KEY')}}"
</script>
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('js/empty-field.js')}}"></script>
<script src="{{asset('js/skycons.js')}}"></script>
<script>
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

    for(i = list.length; i--; )
        icons.set(list[i], list[i]);
    icons.play();
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/search-city.js')}}"></script>

