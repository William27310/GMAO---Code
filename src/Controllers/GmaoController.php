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

    public function create_machine()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];

            if (empty($_POST['nom'])) {
                $errors['nom'] = "Veuillez rentrer un utilisateur.";
            }

            if (empty($_POST['marque'])) {
                $errors['marque'] = "Veuillez rentrer une marque.";
            }

            if (empty($_POST['machine'])) {
                $errors['machine'] = "Veuillez identifier la machine.";
            }

            if (empty($_POST['mise_en_service'])) {
                $errors['mise_en_service'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['fin_de_garantie'])) {
                $errors['fin_de_garantie'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['etat'])) {
                $errors['etat'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['numero'])) {
                $errors['numero'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (isset($_POST['description'])) {
                if (empty($_POST['description'])) {
                    $errors['description'] = "Veuillez renseigner une description.";
                }
            }
            if (empty($errors)) {
                header("Location : index.php?url=machine");
            }

        }

        require_once __DIR__ . "/../Views/create_machine.php";
    }

    public function sous_equipement()
    {
        require_once __DIR__ . "/../Views/sous_equipement.php";
    }

    public function intervention()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];

            if (empty($_POST['service'])) {
                $errors['service'] = "Service à fournir..";
            }

            if (empty($_POST['nom'])) {
                $errors['nom'] = "Nom de l'utilisateur..";
            }

            if (empty($_POST['destinataire'])) {
                $errors['destinataire'] = "Veuillez assigner une personne..";
            }

            if (empty($_POST['machine'])) {
                $errors['machine'] = "Veuillez fournir le nom d'identification de la machine..";
            }

            if (empty($_POST['objet'])) {
                $errors['objet'] = "Veuillez justifier la demande.";
            }

            if (empty($_POST['delai'])) {
                $errors['delai'] = "Veuillez poser un délai.";
            }

            if (empty($_POST['date_de_prevue'])) {
                $errors['date_de_prevue'] = "Quand cela sera prévue ?";
            }

            if (empty($errors)) {
                header("Location : index.php?url=machine");
            }
        }


        require_once __DIR__ . "/../Views/intervention.php";
    }

    public function bon_de_travail()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];

            if (empty($_POST['rappel_d_intervention'])) {
                $errors['rappel_d_intervention'] = "Veuillez faire un rappel.";
            }

            if (empty($_POST['travaux_a_realises'])) {
                $errors['travaux_a_realises'] = "Veuillez indiquer les travaux à préconisés.";
            }

            if (empty($_POST['numero'])) {
                $errors['numero'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['quantite'])) {
                $errors['quantite'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['reference'])) {
                $errors['reference'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['date'])) {
                $errors['date'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['heure'])) {
                $errors['heure'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['destinataire'])) {
                $errors['destinataire'] = "Veuillez indiquer un utilisateur.";
            }

            if (empty($errors)) {
                header("Location : index.php?url=machine");
            }
        }

        require_once __DIR__ . "/../Views/bon_de_travail.php";
    }

    public function compte_rendu()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];

            if (empty($_POST['arret'])) {
                $errors['arret'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['duree'])) {
                $errors['duree'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($_POST['cout'])) {
                $errors['cout'] = '<i class="bi bi-exclamation-lg"></i>';
            }

            if (empty($errors)) {
                header("Location : index.php?url=machine");
            }
        }

        require_once __DIR__ . "/../Views/compte_rendu.php";
    }
}
