<?php


namespace App\Controllers;

class UserController
{
    public function login()
    {
        require_once __DIR__ . "/../Views/login.php";
    }

    public function register()
    {
        require_once __DIR__ . "/../Views/register.php";
    }

    public function forgot()
    {
        require_once __DIR__ . "/../Views/forgot.php";
    }
}
