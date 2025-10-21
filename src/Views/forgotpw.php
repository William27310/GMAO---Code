<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgotpw</title>
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
            <div class="bg-secondary-subtle rounded col-8">
                <div class="text-center mt-5">
                    <h3>Récupération du mot de passe</h1>
                </div>

                <form action="" method="post" class="mt-5">

                    <div class="row gap-1 justify-content-center mb-5">

                        <!-- E-mail -->
                        <div class="col-12 col-sm-6 col-md-6 mt-1">
                            <div class="d-flex justify-content-between">
                                <label for="inputEmail" class="form-label fw-bold">Saisissez votre adresse E-mail</label>
                            </div>
                            <input type="text" class="form-control mb-1" placeholder="Email" aria-label="Email">
                            <!-- <a href="index.php?url=forgotemail">Adresse e-mail oublié ?</a> -->
                            <div class="d-flex justify-content-around mt-3 mb-2">
                                <a href="index.php?url=continue" class="btn btn-outline-dark">Continuer</a>
                                <a href="index.php?url=login" class="btn btn-outline-dark">Retour</a>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>