<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php require_once __DIR__ . "/../Views/templates/navbar.php" ?>

<body class="min-vh-100">

    <div class="d-flex justify-content-around flex-wrap mt-5 mb-5 container">
        <div class="card mt-5" style="width: 18rem;">
            <img src="upload/person.png" class="card-img-top border border-dark" alt="...">
            <div class="card-body text-center border border-dark">
                <h5 class="card-title mb-3">Nom - Compte</h5>
                <a href="index.php?url=login" class="btn btn-primary">Se connecter</a>
            </div>
        </div>

        <div class="card mt-5" style="width: 18rem;">
            <img src="upload/person_add.png" class="card-img-top border border-dark" alt="...">
            <div class="card-body text-center border border-dark">
                <h5 class="card-title mb-3">Utilisateur</h5>
                <a href="index.php?url=register" class="btn btn-primary">Créer un compte</a>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>