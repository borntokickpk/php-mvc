<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function() {
    return "Home";
});

$app->router->get('/contact', function() {
    return "Contact us...";
});

$app->run();