<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create_machine</title>
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
                        <form action="index.php?url=create_machine" method="post" class="mt-5">

                            <div class="row gap-1 justify-content-center mb-5">

                                <!-- Nom -->
                                <div class="col-12 col-sm-6 col-md-8">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Nom</label>
                                        <span class="text-danger text-end"><?= $errors['nom'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="nom" value="<?= $_POST['nom'] ?? "" ?>" placeholder="Nom">
                                </div>

                                <!-- Marque -->
                                <div class="col-12 col-sm-6 col-md-8 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputEmail" class="form-label">Marque</label>
                                        <span class="text-danger text-end"><?= $errors['marque'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="destinataire" value="<?= $_POST['marque'] ?? "" ?>" placeholder="Marque">
                                </div>

                                <!-- Numéro de série -->
                                <div class="col-12 col-sm-6 col-md-8 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputPassword" class="form-label">Machine</label>
                                        <span class="text-danger text-end"><?= $errors['machine'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="machine" value="<?= $_POST['machine'] ?? "" ?>" placeholder="Machine">
                                </div>

                                <!-- Mise en service -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputLastName" class="form-label">Mise en service</label>
                                        <span class="text-danger text-end"><?= $errors['mise_en_service'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="mise_en_service" value="<?= $_POST['mise_en_service'] ?? "" ?>" placeholder="Mise en service">
                                </div>

                                <!-- Fin de garantie -->
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label">Fin de garantie</label>
                                        <span class="text-danger text-end"><?= $errors['fin_de_garantie'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="fin_de_garantie" value="<?= $_POST['fin_de_garantie'] ?? "" ?>" placeholder="Fin de garantie">
                                </div>

                                <!-- Etat -->
                                <div class="col-12 col-sm-6 col-md-4 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputQuality" class="form-label mt-4">Etat</label>
                                        <span class="text-danger text-end mt-4"><?= $errors['etat'] ?? "" ?></span>
                                    </div>
                                    <div>
                                        <select name="quality" id="inputQuality" class="form-select">
                                            <option value="" <?= (isset($_POST['etat']) && $_POST['etat'] == '') ? 'selected' : '' ?>></option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Numéro -->
                                <div class="col-12 col-sm-6 col-md-4 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="inputFirstName" class="form-label mt-4">Numéro</label>
                                        <span class="text-danger text-end mt-4"><?= $errors['numero'] ?? "" ?></span>
                                    </div>
                                    <input type="text" class="form-control" name="numero" value="<?= $_POST['numero'] ?? "" ?>" placeholder="Numéro">
                                </div>

                                <!-- Description -->
                                <div class="col-12 col-sm-6 col-md-8 mt-1">
                                    <div class="d-flex justify-content-between">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <span class="text-danger text-end"><?= $errors['description'] ?? "" ?></span>
                                    </div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" rows="3" name="description" value="<?= $_POST['description'] ?? "" ?>"></textarea>
                                </div>
                            </div>

                            <div class="d-flex justify-content-around mb-5">
                                <button type="submit" class="btn btn-outline-dark">Soumettre le nouvel équipement</button>
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