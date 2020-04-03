(function() {
    var placesAutocomplete = places({
        appId: 'plS1XWDY30VH',
        apiKey: 'e0f0d3b57e105696a96ce80992c07648',
        container: document.querySelector('#city'),
        templates: {
            value: function(suggestion) {
                return suggestion.name;
            }
        }
    }).configure({
        type: 'city',
        aroundLatLngViaIP: false,
    });
})();
