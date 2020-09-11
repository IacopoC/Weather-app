<script>
    const weather_api_key = "{{ env('WEATHER_DATABASE_KEY')}}"
    const google_location_key = "{{ env('GOOGLE_GEOLOCATION_KEY') }}"
</script>
<script src="{{asset('js/empty-field.js')}}"></script>
<script src="{{asset('js/skycons.js')}}"></script>
<script src="{{asset('js/skycons-act.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/search-city.js')}}"></script>
