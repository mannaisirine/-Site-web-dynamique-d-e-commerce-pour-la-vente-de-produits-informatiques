<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../include/head_front.php' ?>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh;
        }

        nav {
            background-color: #007bff;
            padding: 10px;
            width: 100%;
            position: fixed;
            z-index: 1000;
        }

        .container {
            padding-top: 80px; /* Add space at the top for the fixed navigation bar */
        }

        #image1 {
            width: 100%; /* Make the image fill the container */
            height: auto; /* Maintain aspect ratio */
            max-width: 400px; /* Limit maximum width */
            margin-top: 20px; /* Adjust margin based on your design */
        }

        #content {
            margin-right: 120px; /* Adjust margin based on image width */
        }

        #welcome-message {
            font-size: 3em; /* Adjust font size for the welcome message */
            font-weight: bold;
            color: #005a5e;
            margin-bottom: 20px;
            padding: 30px; /* Add padding for a more spacious look */
            background-color: #ffffff; /* Set background color */
            border-radius: 15px; /* Add border radius for rounded corners */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            text-align: center; /* Center-align the text */
        }
    </style>
</head>

<body>

    <?php include 'nav-admin.php' ?>

    <div class="container py-2">
    <?php
if (!isset($_SESSION['utilisateur'])) {
    // Debugging statement
    echo "DEBUG: User not authenticated. Redirecting to login-admin.php.";
    header('location: login-admin.php');
    exit; // Stop further execution
}
?>

        <div id="welcome-message">Bienvenue <?php echo $_SESSION['utilisateur']['login'] ?>! C'est votre espace admin.</div>

        <!-- Add your custom content for the admin page here -->
        <div class="text-center">
            <img id="image1" src="https://www.freepngimg.com/thumb/machine/40248-9-greeting-images-free-download-image.png" alt="Image 1">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php include('footer.php'); ?>
</body>


</html>
