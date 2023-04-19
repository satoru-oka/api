<?php
// fatal error:Your Composer dependencies require a PHP version ">= 8.1.0". You are running 8.0.8.
// require dirname(__DIR__) . "/vendor/autoload.php";
require dirname(__DIR__) . "/src/TaskController.php";

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$parts = explode("/", $path);
$resource = $parts[4];
$id = $parts[5] ?? null;

if ($resource != "tasks") {
    http_response_code(404);
    exit;
}


$controller = new TaskController;
$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);