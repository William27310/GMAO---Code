<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon de travail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
                        <form action="index.php?url=bon_de_travail" method="post" class="mt-5">

                            <div class="row gap-1 justify-content-center mb-5">

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">N° Intervention : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Délai : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Destinataire : </span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Nom : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Date : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-2">
                                    <div class="d-flex justify-content-between">
                                        <span class="fw-bold">Machine : Auto</span>
                                    </div>
                                    <input value="">
                                </div>

                                <!-- Equipement -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputLastName" class="form-label">Equipement</label>
                                        <span class="text-danger text-end"><?= $errors['equipement'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="equipement" value="<?= $_POST['equipement'] ?? "" ?>" placeholder="Equipement">
                                </div>

                                <!-- Sous-équipement -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Sous-équipement</label>
                                        <span class="text-danger text-end"><?= $errors['sous_equipement'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" value="<?= $_POST['sous_equipement'] ?? "" ?>" placeholder="Sous-équipement" name="sous_equipement">
                                </div>

                                <!-- Rappel d'intervention -->
                                <div class="col-12 col-sm-6 col-md-8 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="exampleFormControlTextarea1" class="form-label">Rappel d'intervention</label>
                                        <span class="text-danger text-end"><?= $errors['rappel_d_intervention'] ?? "" ?></span>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" value="<?= $_POST['rappel_d_intervention'] ?? "" ?>" placeholder="Rappel d'intervention" rows="3" name="rappel_d_intervention"></textarea>
                                </div>

                                <!-- Travaux à réalisés -->
                                <div class="col-12 col-sm-6 col-md-8 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="exampleFormControlTextarea2" class="form-label">Travaux à réalisés</label>
                                        <span class="text-danger text-end"><?= $errors['travaux_a_realises'] ?? "" ?></span>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea2" value="<?= $_POST['travaux_a_realises'] ?? "" ?>" placeholder="Travaux à réalisés" rows="3" name="travaux_a_realises"></textarea>
                                </div>

                            </div>

                            <!-- Pièces détachées -->
                            <h4 class="mb-3">Pièces détachées</h4>
                            <div class="row gap-1 justify-content-center mb-5">

                                <!-- Numéro -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputLastName" class="form-label">Numéro</label>
                                        <span class="text-danger text-end"><?= $errors['numero'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="numero" value="<?= $_POST['numero'] ?? "" ?>" placeholder="Numéro">
                                </div>

                                <!-- Quantité -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Quantité</label>
                                        <span class="text-danger text-end"><?= $errors['quantite'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="quantite" value="<?= $_POST['quantite'] ?? "" ?>" placeholder="Quantité">
                                </div>

                                <!-- Référence -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Référence</label>
                                        <span class="text-danger text-end"><?= $errors['reference'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="reference" value="<?= $_POST['reference'] ?? "" ?>" placeholder="Référence">
                                </div>
                            </div>

                            <!-- Début prévue -->
                            <h4 class="mb-3">Début prévue</h4>
                            <div class="row gap-1 justify-content-center mb-5">

                                <!-- Quantité -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Date</label>
                                        <span class="text-danger text-end"><?= $errors['date'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="date" value="<?= $_POST['date'] ?? "" ?>" placeholder="Date">
                                </div>

                                <!-- Référence -->
                                <div class="col-12 col-sm-4 col-md-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Heure</label>
                                        <span class="text-danger text-end"><?= $errors['heure'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="heure" value="<?= $_POST['heure'] ?? "" ?>" placeholder="Heure">
                                </div>
                            </div>

                            <!-- Destinataire -->
                            <div class="row gap-1 justify-content-center mb-5">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Destinataire</label>
                                        <span class="text-danger text-end"><?= $errors['destinataire'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="destinataire" value="<?= $_POST['destinataire'] ?? "" ?>" placeholder="Destinataire">
                                </div>

                            </div>

                            <div class="d-flex justify-content-around mb-5">
                                <button type="submit" class="btn btn-outline-dark">Valider le bon de travail</button>
                                <a href="index.php?url=compte_rendu" class="btn btn-outline-dark">CR</a>
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