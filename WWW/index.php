<?php

// procedure
$curl_init = curl_init();
// curl_setopt($curl_init, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);

// can be handled as an array.
curl_setopt_array($curl_init, [
    CURLOPT_URL => "https://maps.openweathermap.org/maps/2.0/weather/1h/HRD0/4/1/6?date={API}",
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($curl_init);
$status_code = curl_getinfo($curl_init, CURLINFO_HTTP_CODE);

curl_close($curl_init);

echo $status_code;

echo $response, "\n";