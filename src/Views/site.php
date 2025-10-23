<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site</title>
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
    <div class="mt-2 mb-2 col-11 rounded">
      <div class="row bg-light justify-content-center gap-5 rounded">
        <div class="text-center">
          <img src="upload/afpa.png" class="mt-3 mb-3 p-3" alt="">
          <h1>Site AFPA</h1>
          <hr class="mt-3">

          <div class="d-flex justify-content-around">
            <button class="btn btn-outline-dark">Créer</button>
            <button class="btn btn-outline-dark">Modifier</button>
            <button class="btn btn-outline-dark">Supprimer</button>
          </div>
          <hr>

          <!-- Rubrique -->
          <div class="d-flex flex-column flex-md-row justify-content-around mb-5">

            <div class="right_panel card order-1 order-md-2 mt-3 p-5 mb-4">
              <h4>Informations fixes</h4>
              <div class="d-flex justify-content-around mt-3">
                <p class="mt-3">Site-Nom <br>
                  Site-Adresse <br>
                  Site-Téléphone <br>
                  Site-Siret <br>
                  Site-CodePostal</p>
              </div>
            </div>

            <div class="left_panel mt-3 order-2 order-md-1">
              <div class="card me-3">
                <div class="card-body">
                  <h5 class="card-title">Batiment-Nom</h5>
                  <p class="card-text">Numéro</p>
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

<!-- <div class="d-flex justify-content-center align-items-center mt-5"> -->
<!-- <iframe href="index.php?url=batiment" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2590.4107623077543!2d0.16770707689533565!3d49.51452045430886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e02fe4654b54f5%3A0x1f646095a5a5e198!2sRue%20Maximilien%20Robespierre%2C%2076610%20Le%20Havre!5e0!3m2!1sfr!2sfr!4v1761118704225!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
<!-- </div> -->