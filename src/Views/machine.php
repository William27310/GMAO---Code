<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body class="min-vh-100 bg-secondary-subtle">

    <?php require_once __DIR__ . "/../Views/templates/navbar.php" ?>

    <div class="d-flex justify-content-center">
        <div class="mt-5 mb-2 col-11">
            <div class="row bg-light justify-content-center gap-5 rounded">
                <div class="text-center">
                    <div class="d-flex justify-content-between p-3">
                        <div>
                            <h1>Site AFPA</h1>
                        </div>
                        <a href="index.php?url=atelier" class="mt-5 btn btn-outline-dark">Revenir en arrière</a>
                    </div>
                    <hr class="mt-3">

                    <div class="d-flex justify-content-around">
                        <a href="index.php?url=intervention" class="btn btn-outline-dark">Créer une intervention</a>
                        <a href="" class="btn btn-outline-dark">Renseigner une intervention</a>
                        <a href="" class="btn btn-outline-dark">Historique des intervention</a>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-center">
                        <div class="mt-4 mb-5">
                            <p class="fw-bold">Documentation :</p>
                            <img src="upload/afpa.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">

                        <div class="card col-8 col-sm-4 col-md-2 mb-3">
                            <img src="upload/afpa.png" class="card-img-top" data-bs-toggle="modal" data-bs-target="#imageModal" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Equipement</h5>
                                <p>Nom <br>
                                    Fonctionnalité <br>
                                    Type</p>
                                <a href="index.php?url=sous_equipement" class="btn btn-outline-dark">Sous-équipement</a>
                            </div>
                        </div>
                    </div>


                    <!-- Multiple Toggle -->
                    <p class="d-inline-flex gap-1">
                        <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">MTBF</button>
                        <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">MTTR</button>
                        <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Pareto</button>
                        <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">TRS</button>
                        <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3 multiCollapseExample4">Toutes les images</button>
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-md-3 col-sm-6">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body text-center">
                                    <img src="upload/afpa.png" alt="Image 1" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body text-center">
                                    <img src="upload/afpa.png" alt="Image 2" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card card-body text-center">
                                    <img src="upload/afpa.png" alt="Image 3" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="collapse multi-collapse" id="multiCollapseExample4">
                                <div class="card card-body text-center">
                                    <img src="upload/afpa.png" alt="Image 4" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Image Cliquable -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="upload/afpa.png" alt="Image agrandie" class="img-fluid w-100">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>