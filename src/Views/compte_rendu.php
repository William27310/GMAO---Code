<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte-rendu</title>
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
                        <a href="index.php?url=machine" class="mt-5 btn btn-outline-dark">Revenir en arrière</a>
                    </div>
                    <hr class="mt-3">

                    <div class="container">
                        <form action="index.php?url=compte_rendu" method="post" class="mt-5">

                            <div class="row gap-1 justify-content-center mb-5">

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Système : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Sous-équipement : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Equipement : </span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Rappel bon de travail : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Intervention : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Pièces remplacées : Auto Modifiable</span>
                                    </div>
                                    <input value="">
                                </div>


                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Intervenants : Auto Modifiable</span>
                                    </div>
                                    <input value="">
                                </div>
                            </div>

                            <div class="row gap-1 justify-content-center mb-5">
                                <!-- Arrêt de production -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputLastName" class="form-label">Arrêt de production</label>
                                        <span class="text-danger text-end"><?= $errors['arret'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="arret" value="<?= $_POST['arret'] ?? "" ?>" placeholder="Arrêt de production">
                                </div>

                                <!-- Durée d'intervention -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Durée intervention</label>
                                        <span class="text-danger text-end"><?= $errors['duree'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="duree" value="<?= $_POST['duree'] ?? "" ?>" placeholder="duree">
                                </div>

                                <!-- Coût d'intervention -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Coût intervention</label>
                                        <span class="text-danger text-end"><?= $errors['cout'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="cout" value="<?= $_POST['cout'] ?? "" ?>" placeholder="cout">
                                </div>
                            </div>

                            <div class="row gap-1 justify-content-center mb-5">
                                <!-- Date Début -->
                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Date début : Auto modifiable</span>
                                    </div>
                                    <input value="">
                                </div>

                                <!-- Date Fin -->
                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Date fin : SI LE COMPTE RENDU EST COMPLETER PLUS DE 1 JOUR</span>
                                    </div>
                                    <input value="">
                                </div>
                            </div>

                            <div class="d-flex justify-content-around mb-5">
                                <button type="submit" class="btn btn-outline-dark">Terminer le compte-rendu</button>
                                <a href="index.php?url=machine" class="btn btn-outline-dark">Retour</a>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>