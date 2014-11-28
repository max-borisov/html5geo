<!DOCTYPE html>
<html>
<head>
    <title>GEO location</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <meta charset="utf-8">
    <style type="text/css">
        body {
            width: 100%;
            height: 100%;
        }
        #map {
            margin: 0 auto;
            width: 90%;
            height: 600px;
        }
        .update {
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<?php
$position = json_decode(file_get_contents('data.json'), true);
$position = array_reverse($position)[0];
?>

<p class="update">Данные обновлены в <?= date('H:i:s', $position['timestamp']) ?></p>
<div id="map"></div>

<script type="text/javascript">

    setInterval(function() {
        location.reload();
    }, 1000 * 60 * 1);

    var lat = <?= $position['lat'] ?>;
    var lng = <?= $position['lng'] ?>;
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