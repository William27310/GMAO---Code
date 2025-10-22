<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batiment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<?php require_once __DIR__ . "/../Views/templates/navbar.php" ?>

<body class="min-vh-100 bg-secondary-subtle">

    <div class="container mt-5 mb-5 col-11">
        <div class="row justify-content-center">
            <div class="bg-light rounded">
                <div class="d-flex justify-content-between p-3">
                    <div>
                        <h1>Site AFPA</h1>
                        <h5>Batiment 2C</h4>
                    </div>
                    <a href="index.php?url=site" class="mt-5 btn btn-outline-dark">Revenir en arrière</a>
                </div>
                <hr>
                <h3 class="ms-5 mt-5">Les différents ateliers</h3>
                <div class="row justify-content-around gap-5 mt-5 atelier">

                    <div class="card col-8 col-sm-4 col-md-4 mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Atelier 6</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="index.php?url=atelier" class="btn btn-primary">Accéder à l'atelier</a>
                        </div>
                    </div>

                    <div class="card col-8 col-sm-4 col-md-4 mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="index.php?url=home" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8 col-sm-4 col-md-4 mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-8 col-sm-4 col-md-4 mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>