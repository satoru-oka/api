<?php
// fatal error:Your Composer dependencies require a PHP version ">= 8.1.0". You are running 8.0.8.
// require dirname(__DIR__) . "/vendor/autoload.php";
declare(strict_types=1);
// ini_set("display_erros", "On");

require dirname(__DIR__) . "/src/TaskController.php";
require dirname(__DIR__) . "/src/ErrorHandler.php";

set_exception_handler("ErrorHandler::handleException");

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$parts = explode("/", $path);
$resource = $parts[4];
$id = $parts[5] ?? null;

if ($resource != "tasks") {
    http_response_code(404);
    exit;
}

header("Content-type: application/json; charset=UTF-8");

$controller = new TaskController;
$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);