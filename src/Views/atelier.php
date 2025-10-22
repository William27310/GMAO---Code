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
        <div class="row bg-light justify-content-center gap-5">
            <div class="border border-dark rounded">
                <div class="text-center">
                    <img src="upload/afpa.png" class="mt-3 mb-3 p-3" alt="">
                    <h1>Site AFPA</h1>
                    <hr class="mt-3">

                    <!-- Rubrique -->
                    <div class="d-flex flex-column flex-md-row justify-content-around mb-5">

                        <div class="right_panel card order-1 order-md-2 mt-3 mb-4">
                            <h4 class="mt-5">Informations fixes</h4>
                            <p class="mt-4">Contenu affiché sur la partie gauche, sans scroll.</p>
                            <p>Tu peux y mettre tout ce que tu veux, menus, infos, etc.</p>
                        </div>

                        <div class="left_panel order-2 order-md-1">
                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Equipement</h5>
                                    <p class="card-text">Texte de la carte 1.</p>
                                    <a href="index.php?url=batiment" class="btn btn-primary">Button</a>
                                </div>
                            </div>

                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">Texte de la carte 1.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>

                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">Texte de la carte 1.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>

                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Texte de la carte 2.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>

                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Texte de la carte 3.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>

                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Texte de la carte 4.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Fin Rubrique -->

                </div>
            </div>

        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>