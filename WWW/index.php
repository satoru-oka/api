<?php

// procedure
$curl_init = curl_init();
// curl_setopt($curl_init, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
$headers = [
    "Authorization: Client - ID "
];

// can be handled as an array.
curl_setopt_array($curl_init, [
    CURLOPT_URL => "https://example.com",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($curl_init);
$status_code = curl_getinfo($curl_init, CURLINFO_HTTP_CODE);

curl_close($curl_init);

echo $status_code;

echo $response, "\n";