
(function() {
    let placesAutocomplete = places({
        appId: 'plS1XWDY30VH',
        apiKey: 'e0f0d3b57e105696a96ce80992c07648',
        container: document.querySelector('#city')
    });
    let address = document.querySelector('#city');
    placesAutocomplete.on('change', function(e) {
        address.textContent = e.suggestion.value
    });
})();
