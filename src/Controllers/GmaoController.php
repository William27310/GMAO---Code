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

    public function machine()
    {
        require_once __DIR__ . "/../Views/machine.php";
    }

    public function sous_equipement()
    {
        require_once __DIR__ . "/../Views/sous_equipement.php";
    }

    public function intervention()
    {
        require_once __DIR__ . "/../Views/intervention.php";
    }

    public function bon_de_travail()
    {
        require_once __DIR__ . "/../Views/bon_de_travail.php";
    }

    public function compte_rendu()
    {
        require_once __DIR__ . "/../Views/compte_rendu.php";
    }
}
