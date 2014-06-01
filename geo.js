var Geo = {

    location: function() {
        var that = this;
        if (navigator.geolocation) {
//            var timeoutVal = 10 * 1000 * 1000;
            navigator.geolocation.getCurrentPosition(
                that._displayPosition,
                that._displayError
            );
        }
        else {
            alert("Geolocation is not supported by this browser");
        }
    },

    _displayPosition: function(position) {
//        alert("Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude)
        $('#lat').html(position.coords.latitude);
        $('#lng').html(position.coords.longitude);
    },

    _displayError: function(error) {
        var errors = {
            1: 'Permission denied',
            2: 'Position unavailable',
            3: 'Request timeout'
        };
        alert("Error: " + errors[error.code]);
    }
}