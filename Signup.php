<?php
ob_start(); // Ajoutez cette ligne au début du fichier
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .card {
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #007bff;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert-danger {
            margin-top: 1.5rem;
        }

        /* Style pour le formulaire */
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            color: #495057;
        }

        input.form-control {
            margin-bottom: 1rem;
        }
        .login-image {
    width: 100%;
    max-height: 200px; /* Ajustez la hauteur selon vos besoins */
    
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

        .btn-primary {
            background-color: #005a5e !important; /* Add !important to override Bootstrap styles */
            border-color: #005a5e !important;
        }
    

        
    </style>
</head>
<body>
    <?php include 'include/nav.php' ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.t0BLt_Z7aNAHxCjoogD1yQHaFh&pid=Api&P=0&h=180" class=" login-image" alt="Login Image">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer un compte</h4>
                        <?php
                        if (isset($_POST['ajouter'])) {
                            $login = $_POST['login'];
                            $rawPassword = $_POST['password'];

                            if (!empty($login) && !empty($rawPassword)) {
                                require_once 'include/database.php';
                                $date = date('Y-m-d');

                                // Hashage du mot de passe
                                $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

                                $sqlState = $pdo->prepare('INSERT INTO utilisateur VALUES(null,?,?,?)');
                                $sqlState->execute([$login, $hashedPassword, $date]);
                                // Redirection
                                header('location: login.php');
                            } else {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    Login et mot de passe sont obligatoires.
                                </div>
                                <?php
                            }
                        }
                        ?>
                        <form method="post" autocomplete="off">
                            <div class="mb-3 form-group">
                                <label for="login" class="form-label">Login</label>
                                <input type="text" class="form-control" id="login" name="login" required>
                            </div>

                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>

                            <div class="mb-3 form-group">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Adresse E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3 form-group">
                                <label for="sexe" class="form-label">Sexe</label>
                                <div>
                                    <input type="radio" id="homme" name="sexe" value="homme" required>
                                    <label for="homme">Homme</label>
                                </div>
                                <div>
                                    <input type="radio" id="femme" name="sexe" value="femme" required>
                                    <label for="femme">Femme</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div id="footer" class="text-center">
        <?php include('back/footer.php'); ?>
    </div>

</body>

</html>