<?php


namespace App\Controllers;

class UserController
{
    public function login()
    {
        $errors = [];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['login'])) {
                $errors['login'] = 'Veuillez renseigner vos informations pour vous connectez';
            }

            if (empty($errors)) {
                // Authentification ou redirection
                header("Location: index.php?url=site");
                exit;
            }
        }

        require_once __DIR__ . "/../Views/login.php";
    }

    public function register()
    {

        $regEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $errors = [];


            if (empty($_POST['lastname'])) {
                $errors['lastname'] = "Nom Obligatoire !";
            }

            if (empty($_POST['firstname'])) {
                $errors['firstname'] = "Prénom Obligatoire !";
            }

            if (isset($_POST['email'])) {
                if (empty($_POST['email'])) {
                    $errors['email'] = "Email Obligatoire !";
                } else if (!preg_match($regEmail, $_POST['email'])) {
                    $errors['email'] = "Caractère(s) non-autorisé(s) !";
                }
            }

            if (empty($_POST['password'])) {
                $errors['password'] = "Mot de passe nécessaire !";
            }

            if (isset($_POST['cpassword'])) {
                if (empty($_POST['cpassword'])) {
                    $errors['cpassword'] = "Mot de passe nécessaire !";
                } else if ($_POST['password'] !== $_POST['cpassword']) {
                    $errors['cpassword'] = "Ne correspond pas !";
                }
            }

            if (isset($_POST['quality'])) {
                if (empty($_POST['quality'])) {
                    $errors['quality'] = "Veuillez renseigner votre qualité !";
                }
            }

            if (empty($errors)) {
                // Authentification ou redirection
                header("Location: index.php?url=site");
                exit;
            }
        }
        require_once __DIR__ . "/../Views/register.php";
    }

    public function continue()
    {

        require_once __DIR__ . "/../Views/continue.php";
    }

    public function forgotpw()
    {
        require_once __DIR__ . "/../Views/forgotpw.php";
    }

    public function forgotemail()
    {
        require_once __DIR__ . "/../Views/forgotemail.php";
    }
}
