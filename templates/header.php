<?php
    require_once('lib/pdo.php');
    require_once('lib/session.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cuisinea</title>
</head>

<body>
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="assets/images/cigale-olive.jpg" alt="logo" width="50" height="50">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li><a href="#" class="nav-link px-2">Menu</a></li>
                <li><a href="recettes.php" class="nav-link px-2">Nos recettes</a></li>
                <li><a href="ajout_modif-recette.php" class="nav-link px-2">Ajout/Modif recette</a></li>
                <li><a href="#" class="nav-link px-2">A propos</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
                <?php
                if (!isset($_SESSION['user'])) {?>
                <a href="inscription.php" class="btn btn-primary">Inscription</a>
                <?php } ?>
                <?php
                if (isset($_SESSION['user'])) {?>
                <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } ?>

            </div>
        </header>
    </div>