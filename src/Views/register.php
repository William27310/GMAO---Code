<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php require_once __DIR__ . "/../Views/templates/navbar.php" ?>

<body class="min-vh-100">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="bg-secondary-subtle rounded border border-dark col-10 mb-5">
                <div class="text-center mt-5">
                    <h1>Inscrivez-vous !</h1>
                </div>

                <form action="" method="post" class="mt-5">

                    <div class="row gap-1 justify-content-center mb-5">

                        <!-- Nom -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex justify-content-between">
                                <label for="inputLastName" class="form-label">Nom</label>
                                <span class="text-danger text-end">Nom manquant !</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nom" aria-label="Nom">
                        </div>

                        <!-- Prénom -->
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="d-flex justify-content-between">
                                <label for="inputFirstName" class="form-label">Prénom</label>
                                <span class="text-danger text-end">Prénom manquant !</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom">
                        </div>

                        <!-- E-mail -->
                        <div class="col-12 col-sm-6 col-md-8 mt-1">
                            <div class="d-flex justify-content-between">
                                <label for="inputEmail" class="form-label">Email</label>
                                <span class="text-danger text-end">Email manquant !</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                        </div>

                        <!-- Mot de passe -->
                        <div class="col-12 col-sm-6 col-md-8 mt-1">
                            <div class="d-flex justify-content-between">
                                <label for="inputPassword" class="form-label">Mot de passe</label>
                                <span class="text-danger text-end">Mot de passe manquant !</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Password" aria-label="Password">
                        </div>

                        <!-- Qualité -->
                        <div class="col-12 col-sm-6 col-md-4 mt-1">
                            <div class="d-flex justify-content-between mt-4">
                                <label for="inputQuality" class="form-label">Qualité</label>
                                <span class="text-danger text-end">Qualité manquant !</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Qualite" aria-label="Qualite">
                        </div>

                        <!-- Téléphone -->
                        <div class="col-12 col-sm-6 col-md-4 mt-1">
                            <p class="fst-italic text-secondary m-0">* Facultatif</p>
                            <div class="d-flex justify-content-between">
                                <label for="inputPhone" class="form-label">Téléphone</label>
                                <span class="text-danger text-end">Numéro manquant !</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Téléphone" aria-label="Téléphone">
                        </div>
                    </div>


                        <div class="d-flex justify-content-around mb-5">
                            <a href="" class="btn btn-outline-dark">S'inscrire</a>
                            <a href="index.php?url=home" class="btn btn-outline-dark">Retour</a>
                        </div>

                </form>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>