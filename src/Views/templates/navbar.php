<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bogle&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navigateur" data-bs-theme="dark">
        <div class="container-fluid align-items-center justify-content-between">
            <a class="navbar-brand fw-bold ms-3 text-white" href="index.php?url=home">GMAO</a>
            <button class="navbar-toggler me-3" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
                aria-controls="navMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <div class="navbar-nav ms-auto d-flex align-items-center gap-3 me-3">
                    <a class="bouton btn btn-outline-light nav-link text-white d-flex flex-column rounded align-items-center"
                        href="index.php?url=profil">
                        <i class="bi bi-person-circle"></i>
                        <small>Person</small>
                    </a>
                    <button class="btn btn-outline-light text-white bouton">Fr</button>
                </div>
            </div>
        </div>
    </nav>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>