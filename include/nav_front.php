<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    
    <!-- Add the custom styles here -->
    <style>
        body, .navbar-brand, .nav-link, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        body {
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
    <title>Bivente shop</title>
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
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Bivente shop_catégories</a>
                </li>
            </ul>
        </div>
        <?php
        $productCount = 0;
        if (isset($_SESSION['utilisateur'])) {
            $idUtilisateur = $_SESSION['utilisateur']['id'];
            $productCount = count($_SESSION['panier'][$idUtilisateur] ?? []);
        }
        function calculerRemise($prix, $discount)
        {
            return $prix - (($prix * $discount) / 100);
        }

        ?>
        
        <a class="btn float-end" href="../"><i class="fa-solid fa-screwdriver-wrench"></i> Revenir a l'aceuil</a>
        <a class="btn float-end" href="panier.php"><i class="fa-solid fa-cart-shopping"></i> Panier
            (<?php echo $productCount; ?>)</a>
    </div>
</nav>

<!-- Include Bootstrap JS and other scripts as needed -->
<script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

