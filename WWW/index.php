<?php

// $response = file_get_contents("https://example.com");
$response = file_get_contents("https://randomuser.me/api");

$data = json_decode($response, true);

// accessing arrays
echo $data["results"][0]["name"]["first"], "\n";
// array
var_dump($data);
// json
echo $response;