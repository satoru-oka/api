<?php

// procedure
$curl_init = curl_init();
// curl_setopt($curl_init, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);

// can be handled as an array.
curl_setopt_array($curl_init, [
    CURLOPT_URL => "https://randomuser.me/api",
    CURLOPT_RETURNTRANSFER => true
]);

$response = curl_exec($curl_init);
curl_close($curl_init);

echo $response, "\n";