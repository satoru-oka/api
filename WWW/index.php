<?php
// api call
$response = file_get_contents("https://example.com");
// $response = file_get_contents("https://randomuser.me/api");

// $data = json_decode($response, true);

// echo $data["results"][0]["name"]["first"], "\n";
// var_dump($data);
echo $response;