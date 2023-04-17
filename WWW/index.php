<?php

// procedure
$curl_init = curl_init();
// curl_setopt($curl_init, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);

$headers = [
    "Authorization: Client - ID YOUR_ACCESS_KEY"
];

$response_headers = [];

$header_callback = function($curl_init, $header) use (&$response_headers) {
    $len = strlen($header);
    $parts = explode(":", $header, 2);

    if (count($parts) < 2) {
        return $len;
    }

    $response_headers[$parts[0]] = trim($parts[1]);

    return $len;
};

// can be handled as an array.
curl_setopt_array($curl_init, [
    CURLOPT_URL => "https://example.com",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADERFUNCTION => $header_callback
]);

$response = curl_exec($curl_init);
$status_code = curl_getinfo($curl_init, CURLINFO_HTTP_CODE);

curl_close($curl_init);

echo $status_code, "\n";

print_r($response_headers);

echo $response, "\n";