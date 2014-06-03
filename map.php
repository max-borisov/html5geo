<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <style type="text/css">
        #map {
            margin: 0 auto;
            width: 90%;
            height: 600px;
        }
    </style>
</head>
<body>

<?php
$pos = unserialize(file_get_contents('pos.txt'));
//var_dump($pos);
?>

<div id="map"></div>

<script type="text/javascript">
    var lat = <?=$pos['lat']?>;
    var lng = <?=$pos['lng']?>;
    var pos = new google.maps.LatLng(lat, lng);
    var options = {
        zoom: 16,
        center: pos,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), options);
    var marker = new google.maps.Marker({
        position: pos,
        map: map
    });
</script>

</body>
</html>