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
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADER => ture
]);

$response = curl_exec($curl_init);
$status_code = curl_getinfo($curl_init, CURLINFO_HTTP_CODE);
$status_type = curl_getinfo($curl_init, CURLINFO_CONTENT_TYPE);
$status_length = curl_getinfo($curl_init, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

curl_close($curl_init);

echo $status_code, "\n";
echo $status_type, "\n";
echo $status_length, "\n";

echo $response, "\n";