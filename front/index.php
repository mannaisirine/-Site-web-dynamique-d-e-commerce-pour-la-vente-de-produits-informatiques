<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <title>Accueil</title>
    <style>
        .category-list {
            padding-left: 0;
        }

        .category-list-item {
            list-style: none;
            margin-bottom: 8px;
        }

        .category-btn {
            width: 100%;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }

        .category-btn.active {
            background-color: #28a745;
            color: #fff;
            border-color: #28a745;
        }
       
    .category-btn {
        background-color:#007bff!important;
        color: white !important;
    }

    .category-list {
            padding-left: 0;
        }

        .category-list-item {
            list-style: none;
            margin-bottom: 8px;
        }

        .category-btn {
            width: 100%;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }

        .category-btn.active {
            background-color: #28a745;
            color: #fff;
            border-color: #28a745;
        }

        .category-btn {
            background-color: #005a5e !important;
            color: white !important;
        }

        /* Nouveau style pour la barre de navigation verticale */
        .sidebar {
            background-color: #f0f0f0; /* Couleur de fond de la barre latérale */
            padding: 15px;
            height: 80; /* Remplit la hauteur du conteneur parent */
            
            left: 0;
            top: 0;
            width: 300px; /* Largeur de la barre latérale */
            overflow-y: auto; /* Permet le défilement si le contenu est trop long */
        }

        .content {
            margin-left: 250px; /* Déplace le contenu principal vers la droite pour laisser de la place à la barre latérale */
            padding: 15px;
        }

    </style>
</head>
<?php include '../include/nav_front.php' ?>
<div class="container-fluid">
    <div class="row">
        <!-- Barre de navigation verticale -->
        <div class="col-md-3 sidebar">
            <?php
            require_once '../include/database.php';

            $categoryId = isset($_GET['id']) ? $_GET['id'] : NULL;

            $categories = $pdo->query("SELECT * FROM categorie")->fetchAll(PDO::FETCH_OBJ);

            // Initialisation de $activeClasses
            $activeClasses = 'active bg-success rounded border-success';
            ?>
            <!-- Search bar -->
            <form method="GET" action="./">
                <div class="input-group mt-4">
                    <input type="text" class="form-control" name="search" placeholder="Rechercher un produit">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>

            <ul class="list-group list-group-flush category-list">
                <h4 class=" mt-4"><i class="fa fa-light fa-list"></i> Nos catégories</h4>
                <li class="category-list-item">
                    <a class="btn btn-default w-100 category-btn <?= $categoryId == NULL ? $activeClasses : '' ?> btn-primary" href="./">
                        <i class="fa fa-solid fa-border-all"></i> Voir nos produits
                    </a>
                </li>
                <?php
                foreach ($categories as $categorie) {
                    $active = $categoryId === $categorie->id ? $activeClasses : '';
                    ?>
                    <li class="category-list-item">
                        <a class="btn btn-default w-100 category-btn <?= $active ?>"
                           href="index.php?id=<?php echo $categorie->id ?>">
                            <i class="fa <?php echo $categorie->icone ?>"></i> <?php echo $categorie->libelle ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!-- Contenu principal -->
        <div class="col-md-9 content">
            <div class="row">
                <?php
                // Handle search query
                if (isset($_GET['search']) && !empty($_GET['search'])) {
                    $searchQuery = '%' . $_GET['search'] . '%';
                    if (!is_null($categoryId)) {
                        $sqlState = $pdo->prepare("SELECT * FROM produit WHERE id_categorie=? AND libelle LIKE ? ORDER BY date_creation DESC");
                        $sqlState->execute([$categoryId, $searchQuery]);
                    } else {
                        $sqlState = $pdo->prepare("SELECT * FROM produit WHERE libelle LIKE ? ORDER BY date_creation DESC");
                        $sqlState->execute([$searchQuery]);
                    }
                    $produits = $sqlState->fetchAll(PDO::FETCH_OBJ);
                } elseif (!is_null($categoryId)) {
                    $sqlState = $pdo->prepare("SELECT * FROM produit WHERE id_categorie=? ORDER BY date_creation DESC");
                    $sqlState->execute([$categoryId]);
                    $produits = $sqlState->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $produits = $pdo->query("SELECT * FROM produit ORDER BY date_creation DESC")->fetchAll(PDO::FETCH_OBJ);
                }

                // Vérifie si $produits est défini avant de l'afficher
                if (!empty($produits)) {
                    require_once '../include/front/product/afficher_product.php';
                } else {
                    echo "Pas de produits pour l'instant";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>