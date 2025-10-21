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

    case 'login':
        $controller = new UserController();
        $controller->login();
        break;

    case 'register':
        $controller = new UserController();
        $controller->register();
        break;

    case 'continue':
        $controller = new UserController();
        $controller->continue();
        break;

    case 'forgotpw':
        $controller = new UserController();
        $controller->forgotpw();
        break;

    case 'forgotemail':
        $controller = new UserController();
        $controller->forgotemail();
        break;

    default:
        echo "Page non trouvée (404)";
        break;
}
