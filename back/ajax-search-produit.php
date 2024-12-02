<?php
if (isset($_POST['searchValue'])) {
    $searchValue = $_POST['searchValue'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT *
                FROM produit
                WHERE libelle LIKE :searchValue OR description LIKE :searchValue";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':searchValue', "%$searchValue%", PDO::PARAM_STR);
        $stmt->execute();

        $result = '';

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result .= '<tr>';
            $result .= '<td>' . $row['id'] . '</td>';
            $result .= '<td>' . $row['libelle'] . '</td>';
            $result .= '<td>' . $row['prix'] . '</td>';
            $result .= '<td>' . $row['discount'] . '</td>';
            $result .= '<td>' . $row['id_categorie'] . '</td>';
            $result .= '<td>' . $row['date_creation'] . '</td>';
            $result .= '<td>' . $row['description'] . '</td>';
            $result .= '<td>' . $row['image'] . '</td>';
            $result .= '<td>';
            $result .= '<a class="btn btn-primary" href="modifier_produit.php?id=' . $row['id'] . '">Modifier</a>';
            $result .= '<a class="btn btn-danger" href="supprimer_produit.php?id=' . $row['id'] . '" onclick="return confirm(\'Voulez-vous vraiment supprimer le produit ' . $row['libelle'] . ' ?\')">Supprimer</a>';
            $result .= '  </td>';
            $result .= '</tr>';
        }

        echo $result;
    } catch (PDOException $e) {
        echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
    }
} else {
    echo "Search value is not set.";
}
?>
