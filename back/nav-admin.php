<?php
session_start();
$connecte = false;
if (isset($_SESSION['utilisateur'])) {
    $connecte = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../include/head.php' ?>
    <title>Shopa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .navbar {
            background-color: #005a5e;
            border-bottom: 1px solid #005a5e;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5em;
            font-weight: bold;
        }

        .navbar-toggler {
            color: #fff;
            border-color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        .navbar-nav .active {
            font-weight: bold;
        }

        .btn-front {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-front:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <img src="../assets/favicon/favicon2.png" alt="Logo Shopa" width="50" height="50" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Bivente shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $currentPage = $_SERVER['PHP_SELF'];
            ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == '/ecommerce/front/index.php') echo 'active' ?>"
                           aria-current="page" href="../back/admin.php"><i class="fas fa-home"></i> Accueil</a>
                    </li>
                    
                    <?php
                    if ($connecte) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($currentPage == '/ecommerce/categories.php') echo 'active' ?>"
                               aria-current="page" href="categories.php"><i class="fab fa-dropbox"></i> Liste des catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($currentPage == '/ecommerce/produits.php') echo 'active' ?>"
                               aria-current="page" href="produits.php"><i class="fas fa-tag"></i>
                                Liste des produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($currentPage == '/ecommerce/commandes.php') echo 'active' ?>"
                               aria-current="page" href="commandes.php"><i class="fas fa-barcode"></i> Commandes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="deconnexion.php"><i
                                    class="fas fa-right-from-bracket"></i> Déconnexion</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($currentPage == '/ecommerce/login-admin.php') echo 'active' ?>"
                               href="login-admin.php"><i class="fas fa-arrow-right-to-bracket"></i> Connexion</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
           <!-- <a class="btn btn-front" href="front/"><i class="fas fa-cart-shopping"></i> Consulter nos produit</a>  -->
        </div>
    </nav>

    <!-- Votre contenu ici -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>