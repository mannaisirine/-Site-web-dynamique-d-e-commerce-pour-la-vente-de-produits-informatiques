<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../include/head_front.php' ?>
    <title>Gestion des catégories</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            padding-top: 56px; /* Adjust this value based on your navigation bar height */
            background-color: #f8f9fa; /* Add a background color */
        }

        .container {
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #005a5e !important; /* Add !important to override Bootstrap styles */
            border-color: #005a5e !important;
        }

        .btn-primary:hover {
            color: #ffffff;
        }

        /* Add custom style for the footer */
        #footer {
            background-color: #005a5e;
            color: white;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('input[type="text"]').addEventListener('input', function () {
                var searchValue = this.value;
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById('search').innerHTML = xhr.responseText;
                    }
                };
                xhr.open('POST', 'ajax-search.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('searchValue=' + searchValue);
            });
        });
    </script>
</head>

<body>

    <?php include 'nav-admin.php' ?>

    <!-- Add Bootstrap container class to center the content -->
    <div class="container">

        <h2 class="text-center">Gestion des catégories</h2>

        <input type="text" class="form-control" placeholder="Search&hellip;">

        <a href="ajouter_categorie.php" class="btn btn-primary">Ajouter catégorie</a>

        <table class="table table-striped table-hover" id='search'>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nom categorie </th>
                    <th>Description</th>
                    <th>Icone</th>
                    <th>Date</th>
                    <th>Opérations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../include/database.php';
                $categories = $pdo->query('SELECT * FROM categorie')->fetchAll(PDO::FETCH_ASSOC);
                foreach ($categories as $categorie) {
                    ?>
                    <tr>
                        <td><?php echo $categorie['id'] ?></td>
                        <td><?php echo $categorie['libelle'] ?></td>
                        <td><?php echo $categorie['description'] ?></td>
                        <td>
                            <i class="fa <?php echo $categorie['icone'] ?>"></i>
                        </td>
                        <td><?php echo $categorie['date_creation'] ?></td>
                        <td>
                            <a href="modifier_categorie.php?id=<?php echo $categorie['id'] ?>" class="btn btn-primary">Modifier</a>
                            <a href="supprimer_categorie.php?id=<?php echo $categorie['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer la catégorie <?php echo $categorie['libelle'] ?>');" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </div>

    <!-- Bootstrap sticky footer -->
    
        <?php include('footer.php'); ?>
    
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

