<?php
require __DIR__ . "/vendor/autoload.php";

$client = new GuzzleHttp\Client;

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "token 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",
        "User-Agent" => "satoru-oka"
    ]
]);

echo $response->getStatusCode() . "\n";
echo $response->getHeader("content-type")[0] . "\n";
echo substr($response->getBody(), 0, 200), "...\n";
