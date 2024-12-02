<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../include/head_front.php' ?>
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <?php
        if (isset($_POST['connexion'])) {
            $login = $_POST['login'];
            $pwd   = $_POST['password'];

            if (!empty($login) && !empty($pwd)) {
                require_once '../include/database.php';
                $sqlState = $pdo->prepare('SELECT * FROM utilisateur WHERE login=? AND password=?');
                $sqlState->execute([$login, $pwd]);

                if ($sqlState->rowCount() >= 1) {
                    $_SESSION['utilisateur'] = $sqlState->fetch();

                    // Check if "Se souvenir de moi" is checked
                    if (isset($_POST['rememberMe']) && $_POST['rememberMe'] == 'on') {
                        // Set cookies to remember login credentials
                        setcookie('remember_login', $login, time() + 3600 * 24 * 30);
                        setcookie('remember_password', $pwd, time() + 3600 * 24 * 30);
                    } else {
                        // Clear cookies if "Se souvenir de moi" is not checked
                        setcookie('remember_login', '', time() - 3600, '/');
                        setcookie('remember_password', '', time() - 3600, '/');
                    }

                    header('location: admin.php');
                    exit(); // Ensure script stops execution after redirection
                } else {
                    echo '<div class="alert alert-danger" role="alert">Login ou mot de passe incorrects.</div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">Login et mot de passe sont obligatoires.</div>';
            }
        }
        ?>

        <h4>Connexion</h4>
        <form method="post">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" value="<?php echo isset($_COOKIE['remember_login']) ? $_COOKIE['remember_login'] : ''; ?>">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_COOKIE['remember_password']) ? $_COOKIE['remember_password'] : ''; ?>">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Se souvenir du mot de passe</label>
            </div>

            <button type="submit" class="btn btn-primary" name="connexion">Connexion</button>
        </form>
    </div>

<div id="footer" class="text-center" style="background-color: #005a5e ; color: white; padding: 10px 0; position: absolute; bottom: 0; width: 100%;">
        <?php include('footer.php'); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>








