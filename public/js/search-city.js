
(function() {
    let placesAutocomplete = places({
        appId: '',
        apiKey: '',
        container: document.querySelector('#city')
    });
    let address = document.querySelector('#city');
    placesAutocomplete.on('change', function(e) {
        address.textContent = e.suggestion.value
    });
})();
