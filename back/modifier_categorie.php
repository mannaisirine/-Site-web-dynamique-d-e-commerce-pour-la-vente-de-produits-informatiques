<?php
ob_start(); // Ajoutez cette ligne au début du fichier pour résoudre le problème "Cannot modify header information - headers already sent
?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <title>Modifier catégorie</title>
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
</head>
<body>
<?php include 'nav-admin.php' ?>
<div class="container py-2">
    <h4>Modifier catégorie</h4>
    <?php
    require_once '../include/database.php';
    $sqlState = $pdo->prepare('SELECT * FROM categorie WHERE id=?');
    $id = $_GET['id'];
    $sqlState->execute([$id]);

    $category = $sqlState->fetch(PDO::FETCH_ASSOC);
    if (isset($_POST['modifier'])) {
        $libelle = $_POST['libelle'];
        $description = $_POST['description'];
        $icone = $_POST['icone'];

        if (!empty($libelle) && !empty($description)) {
            $sqlState = $pdo->prepare('UPDATE categorie
                                                SET libelle = ? ,
                                                    description = ?,
                                                    icone = ?
                                            WHERE id = ?
                                            ');
            $sqlState->execute([$libelle, $description, $icone, $id]);
            header('location: categories.php');
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                Libelle , description sont obligatoires
            </div>
            <?php
        }

    }

    ?>
    <form method="post">
        <input type="hidden" class="form-control" name="id" value="<?php echo $category['id'] ?>">
        <label class="form-label">Libelle</label>
        <input type="text" class="form-control" name="libelle" value="<?php echo $category['libelle'] ?>">

        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"><?php echo $category['description'] ?></textarea>

        <label class="form-label">Icône</label>
        <input type="text" class="form-control" name="icone" value="<?php echo $category['icone'] ?>">

        <input type="submit" value="Modifier catégorie" class="btn btn-primary " name="modifier">
    </form>
</div>
<div id="footer" class="text-center" style="background-color: #005a5e ; color: white; padding: 10px 0; position: absolute; bottom: 0; width: 100%;">
        <?php include('footer.php'); ?>
    </div>z



</body>
</html>