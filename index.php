<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/views/index.php';
        break;

    case '' :
        require __DIR__ . '/public/views/index.php';
        break;

    case '/login' :
        require __DIR__ . '/public/views/login.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/public/views/404.php';
        break;
}