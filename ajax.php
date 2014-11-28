<?php
if (!isset($_POST['lat'], $_POST['lng'])) {
    return false;
}
saveDataToFile($_POST['lat'], $_POST['lng']);

function saveDataToFile($lat, $lng) {
    $jsonFile = 'data.json';
    $data = file_get_contents($jsonFile);
    if (empty($data)) {
        $data = [];
    } else {
        $data = json_decode($data);
    }
    array_push($data, [
            'lat' => $lat,
            'lng' => $lng,
            'timestamp' => time(),
        ]
    );
    return file_put_contents($jsonFile, json_encode($data));
}
