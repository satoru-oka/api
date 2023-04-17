<?php

$curl_init = curl_init();

curl_setopt_array($curl_init, [
    CURLOPT_URL => "https://api.github.com/gists",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "satoru-oka",
]);

$response = curl_exec($curl_init);

curl_close($curl_init);

$data = json_decode($response, true);
// print_r($data);

foreach ($data as $gist) {
    echo $gist["id"]. " - " . $gist["description"];
}