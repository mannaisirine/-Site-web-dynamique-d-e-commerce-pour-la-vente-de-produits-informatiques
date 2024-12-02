<?php
session_start();
if (!isset($_SESSION['utilisateur'])) {
    header('location: ../login.php');
}

$idUtilisateur = $_SESSION['utilisateur']['id'];

$id = $_POST['id'];
unset($_SESSION['panier'][$idUtilisateur][$id]);
header("location:".$_SERVER['HTTP_REFERER']);
?>
<?php
include('footer.php');
?>

