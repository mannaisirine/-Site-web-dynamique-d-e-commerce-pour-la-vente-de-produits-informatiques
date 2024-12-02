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
    <?php include 'head.php' ?>
    <title>Bivente Shop</title>
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
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-brand,
.navbar-toggler,
.navbar-nav .nav-link,
.btn-front {
    color: white !important;
}

.navbar-nav .nav-link:hover {
    color: #f8f9fa;
}

.navbar-nav .active {
    font-weight: bold;
}

.btn-front {
    background-color: #28a745;
    color: white;
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
        <img src="assets/favicon/favicon2.png" alt="Logo Shopa" width="50" height="50" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#"><b>Bivente shop</b></a>
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
                           aria-current="page" href="index.php"><i class="fas fa-home"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == '/ecommerce/Signup.php') echo 'active' ?>"
                           aria-current="page" href="Signup.php"><i class="fas fa-user-plus"></i>
                            Signup</a>
                    </li>
                    <?php
                    if ($connecte) {
                        ?>
                        
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="deconnexion.php"><i
                                    class="fas fa-right-from-bracket"></i> Déconnexion</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($currentPage == '/ecommerce/login.php') echo 'active' ?>"
                               href="login.php"><i class="fas fa-arrow-right-to-bracket"></i> login</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
               <a class="btn btn-front" href="front/"><i class="fas fa-cart-shopping"></i> Consulter nos produit</a> 
        </div>
    </nav>

    <!-- Votre contenu ici -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


