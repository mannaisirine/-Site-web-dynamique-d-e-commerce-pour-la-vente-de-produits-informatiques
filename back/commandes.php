<!doctype html>
<html lang="en">
<head>
    <?php include '../include/head_front.php' ?>
    <title>Suivi des Commandes</title>
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

        /* Center the table */
        table {
            margin: 0 auto;
        }

        
    </style>
</head>
<body>
<?php include 'nav-admin.php' ?>
<div class="container py-2">
    <h2>Suivi des Commandes</h2>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Client</th>
            <th>Total</th>
            <th>Date</th>
            <th>Opérations</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once '../include/database.php';
        $commandes = $pdo->query('SELECT commande.*,utilisateur.login as "login" FROM commande INNER JOIN utilisateur ON commande.id_client = utilisateur.id ORDER BY commande.date_creation DESC')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($commandes as $commande) {
            ?>
            <tr>
                <td><?php echo $commande['id'] ?></td>
                <td><?php echo $commande['login'] ?></td>
                <td><?php echo $commande['total'] ?> <i class="fa fa-solid fa-dinars">TND</i></td>
                <td><?php echo $commande['date_creation'] ?></td>
                <td><a class="btn btn-primary btn-sm" href="commande.php?id=<?php echo $commande['id']?>">Afficher détails</a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
        <?php include('footer.php'); ?>
    

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>