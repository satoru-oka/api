<?php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$parts = explode("/", $path);
$resource = $parts[4];
$id = $parts[5] ?? null;

echo  $resource . ", " . $id;
echo $_SERVER["REQUEST_METHOD"];

if ($resource != "tasks") {
    http_response_code(404);
    exit;
}