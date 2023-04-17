<?php

// procedure
$curl_init = curl_init();
// curl_setopt($curl_init, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);

$headers = [
    "Authorization: token YOUR_ACCESS_KEY",
];

// can be handled as an array.
curl_setopt_array($curl_init, [
    CURLOPT_URL => "https://api.github.com/repos/satoru-oka/api/stargazers",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "satoru-oka"
]);

$response = curl_exec($curl_init);
$status_code = curl_getinfo($curl_init, CURLINFO_HTTP_CODE);

curl_close($curl_init);

echo $status_code, "\n";

echo $response, "\n";