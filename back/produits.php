<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <title>Gestion des produits</title>
    
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
        xhr.open('POST', 'ajax-search-produit.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('searchValue=' + searchValue);
    });
});

        </script>
</head>
<body>
<?php include 'nav-admin.php' ?>
<div class="container py-2">
    <h2>Gestion des produits</h2>
    <input type="text" class="form-control" placeholder="search..">
    <a href="ajouter_produit.php" class="btn btn-primary">Ajouter produit</a>
    <table class="table table-striped table-hover" id='search'>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nom du produit </th>
                <th>Prix</th>
                <th>Discount</th>
                <th>Catégorie</th>
                <th>Date de création</th>
                <th>Image</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once '../include/database.php';
        $categories = $pdo->query("SELECT produit.*,categorie.libelle as 'categorie_libelle' FROM produit INNER JOIN categorie ON produit.id_categorie = categorie.id")->fetchAll(PDO::FETCH_OBJ);
        foreach ($categories as $produit){
            $prix = $produit->prix;
            $discount = $produit->discount;
            $prixFinale = $prix - (($prix*$discount)/100);
            ?>
            <tr>
                <td><?= $produit->id ?></td>
                <td><?= $produit->libelle ?></td>
                <td><?= $prix ?> <i class="fa fa-solid fa-dinar"></i></td>
                <td><?= $discount ?> %</td>
                <td><?= $produit->categorie_libelle ?></td>
                <td><?= $produit->date_creation ?></td>
                <td><img class="img-fluid" width="90" src="../upload/produit/<?= $produit->image ?>" alt="<?= $produit->libelle ?>"></td>
                <td>
                    <a class="btn btn-primary" href="modifier_produit.php?id=<?php echo $produit->id ?>">Modifier</a>
                    <a class="btn btn-danger" href="supprimer_produit.php?id=<?php echo $produit->id ?>" onclick="return confirm('Voulez vous vraiment supprimer le produit <?php echo $produit->libelle?> ?')">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<?php include('footer.php'); ?>

</body>
</html>