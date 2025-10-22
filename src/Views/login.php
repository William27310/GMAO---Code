<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <h1>Connectez-vous</h1>
                    <h4 class="text-danger mt-5"><?= $errors['login'] ?? "" ?></h3>
                </div>

                <form action="index.php?url=site" method="post" class="mt-5">

                    <div class="row gap-1 justify-content-center mb-5">

                        <!-- E-mail -->
                        <div class="col-12 col-sm-6 col-md-6 mt-1">
                                <label for="inputEmail" class="form-label">Email</label>
                            <input type="text" class="form-control" name="login" value="<?= $_POST['login'] ?? "" ?>" placeholder="Email" aria-label="Email">
                        </div>

                        <!-- Mot de passe -->
                        <div class="col-12 col-sm-6 col-md-6 mt-1">
                                <label for="inputPassword" class="form-label">Mot de passe</label>
                            <input type="text" class="form-control" name="login" value="<?= $_POST['login'] ?? "" ?>" placeholder="Mot de passe" aria-label="Password">
                            <a href="index.php?url=forgotpw">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around mb-5">
                        <button type="submit" class="btn btn-outline-dark">Se connecter</button>
                        <a href="index.php?url=home" class="btn btn-outline-dark">Retour</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>