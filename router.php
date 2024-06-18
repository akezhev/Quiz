<?php

$config = "query"; //query or path

if ($config == "path") {
    $path = $_SERVER["REQUEST_URI"]; // "/controller/action?param1=1&pram2=2"
    $query_parts = explode('?', $path);
    $path = $query_parts[0]; // "/controller/action"
    $query_parts = explode('/', $path);
    array_shift($query_parts);
} else if ($config == "query") {
    $path = $_GET['route'] ?? 'main/index';
    $query_parts = explode('/', $path);
}

$controller = $query_parts[0] ?? 'main'; // "controller"
$action = $query_parts[1] ?? 'index'; // "action"

$controller_name = __DIR__ . '/controllers/' . ucfirst($controller) . 'Controller.php';

if (file_exists($controller_name)) {
    include_once $controller_name;
    include __DIR__ . "views/footer.php";
    exit();
}

// TODO: заглушка
if ($controller == "registration") {
    include __DIR__ . "/views/register.php";
    include __DIR__ . "/views/footer.php";
    exit();
}