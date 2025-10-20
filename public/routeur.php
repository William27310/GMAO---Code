<?php

use App\Controllers\UserController;
use App\Controllers\HomeController;

$url = $_GET['url'] ?? 'home';

$parts = explode('/', $url);

switch ($parts[0]) {

    case 'home':
    $controller = new HomeController();
    $controller->index();
    break;

}




?>