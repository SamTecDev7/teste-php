<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/Config/Router.php';

use App\Config\Router;

$url = $_SERVER['REQUEST_URI'];

$router = new Router($url);
$router->direcionarRotas();
