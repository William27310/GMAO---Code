<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar align-items-center justify-content-between d-none d-md-flex navigateur">
        <a class="navbar-brand fw-bold ms-5 text-white">GMAO</a>
        <div class="d-flex gap-4 mx-5">
            <div>
                <a href="index.php?url=profil" type="button" class="bouton text-white text-decoration-none btn btn-outline-light d-flex flex-column align-items-center">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <small>person</small>
                </a>
            </div>
            <button class="btn btn-outline-light p-3 rounded text-white bouton">Fr</button>
        </div>
    </nav>

    <nav class="navbar d-block d-sm-none bg-body-tertiary navbar-dark fixed-top navigateur">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="#">GMAO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end navigateur" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold text-white" id="offcanvasNavbarLabel">GMAO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <hr class="text-white">
                    <p class="text-white"><span class="fw-bold">Langue : </span> Français</p>
                    <p class="text-white">Retour au profil</p>
                    <hr class="text-white">
                </div>
            </div>
        </div>
    </nav>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>