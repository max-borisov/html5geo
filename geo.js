var Geo = {

    location: function() {
        var that = this;
        if (navigator.geolocation) {
//            var timeoutVal = 10 * 1000 * 1000;
            /*navigator.geolocation.getCurrentPosition(
                that._displayPosition,
                that._displayError
            );*/
            var timeoutVal = 10 * 1000 * 1000;
            navigator.geolocation.watchPosition(
                that._displayPosition,
                that._displayError,
                { timeout: timeoutVal, maximumAge: 0}
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
//        this._sendPosition(position.coords.latitude, position.coords.longitude);

        $.post( "/ajax.php", { lat: position.coords.latitude, lng: position.coords.longitude }, function(data) {
//            alert(123);
        });

    },

    _displayError: function(error) {
        var errors = {
            1: 'Permission denied',
            2: 'Position unavailable',
            3: 'Request timeout'
        };
        alert("Error: " + errors[error.code]);
    },

    _sendPosition: function(lat, lng) {
        $.post( "/ajax.php", { lat: lat, lng: lng } );
    }
}