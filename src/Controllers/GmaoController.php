<?php

namespace App\Controllers;

class GmaoController
{
    public function site() 
    {
        require_once __DIR__ . "/../Views/site.php";
    }

    public function batiment()
    {
        require_once __DIR__ . "/../Views/batiment.php";
    }

        public function atelier()
    {
        require_once __DIR__ . "/../Views/atelier.php";
    }
}
