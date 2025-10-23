<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php require_once __DIR__ . "/../Views/templates/navbar.php" ?>

<body class="min-vh-100 bg-secondary-subtle">

    <div class="d-flex justify-content-center">
        <div class="mt-5 mb-2 col-11">
            <div class="row bg-light justify-content-center gap-5 rounded">
                <div class="text-center">
                    <div class="d-flex justify-content-between p-3">
                        <div>
                            <h1>Site AFPA</h1>
                        </div>
                        <a href="index.php?url=batiment" class="mt-5 btn btn-outline-dark">Revenir en arrière</a>
                    </div>
                    <hr class="mt-3">

                    <div class="d-flex justify-content-around">
                        <button class="btn btn-outline-dark">Créer</button>
                        <button class="btn btn-outline-dark">Modifier</button>
                        <button class="btn btn-outline-dark">Supprimer</button>
                    </div>
                    <hr>

                    <h4 class="text-start">Equipement</h4>
                    <!-- Rubrique -->
                    <div class="d-flex flex-column flex-md-row justify-content-around mb-5">

                        <div class="right_panel card order-1 order-md-2 mt-3 p-5 mb-2">
                            <h4>Informations fixes</h4>
                            <div class="text-start d-flex justify-content-around mt-3">
                                <p class="mt-3">Site <br>
                                    Bâtiment <br>
                                    Atelier</p>
                            </div>
                        </div>

                        <div class="left_panel mt-3 order-2 order-md-1">
                            <div class="card me-3">
                                <div class="card-body">
                                    <h5 class="card-title">Machine</h5>
                                    <p class="card-text">Texte de la carte 1.</p>
                                    <a href="index.php?url=machine" class="btn btn-primary">Détails</a>
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