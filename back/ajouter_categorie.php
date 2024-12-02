<?php
ob_start(); // Ajoutez cette ligne au début du fichier pour résoudre le problème "Cannot modify header information - headers already sent
?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <style>
    .btn-primary {
            background-color: #005a5e !important; /* Add !important to override Bootstrap styles */
            border-color: #005a5e !important;
        }
        #footer {
            background-color: #005a5e ;
            color: white;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        </style>
    <title>Ajouter catégorie</title>
</head>
<body>
<?php include 'nav-admin.php' ?>
<div class="container py-2">
    <h4>Ajouter catégorie</h4>
    <?php
        if(isset($_POST['ajouter'])){
            $libelle = $_POST['libelle'];
            $description = $_POST['description'];
            $icone = $_POST['icone'];

            if(!empty($libelle) && !empty($description)){
                require_once '../include/database.php';
                $sqlState = $pdo->prepare('INSERT INTO categorie(libelle,description,icone) VALUES(?,?,?)');
                $sqlState->execute([$libelle,$description,$icone]);
                header('location: categories.php');
            }else{
                ?>
                <div class="alert alert-danger" role="alert">
                    Libelle , description sont obligatoires
                </div>
                <?php
            }
        }
    ?>
    <form method="post">
        <label class="form-label">Libelle</label>
        <input type="text" class="form-control" name="libelle">

        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"></textarea>

        <label class="form-label">Icône</label>
        <input type="text" class="form-control" name="icone">

        <input type="submit" value="Ajouter catégorie" class="btn btn-primary " name="ajouter">
    </form>
</div>

<div id="footer" class="text-center" style="background-color: #005a5e ; color: white; padding: 10px 0; position: absolute; bottom: 0; width: 100%;">
        <?php include('footer.php'); ?>
    </div>


</body>
</html>