<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/nav.php' ?>
    
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
    background: linear-gradient(135deg, #dcdcdc, #f0f0f0); /* Dégradé de gris */
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    overflow-x: hidden; /* Empêcher la barre de défilement horizontale */
}

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 10%, transparent 70%); /* Éclat brillant */
    pointer-events: none; /* Permet aux éléments de la page d'être cliquables sous l'éclat */
}
        .row {
            margin: 0;
            padding: 0;
            background: "#FFFFFF";/* Couleur de fond gris dégradé */
            font-family: 'Arial', sans-serif;
        }

        #animated-text {
            font-size: 24px;
            font-weight: bold;
            position: relative;
            display: inline-block;
            text-align: center;
            color:#005a5e;
            margin-top: 60px;
            animation: fadeInOut 2s infinite;
        }

        #animation-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            border: 1px solid #ccc;
        }

        .image {
            width: 100%;
            height: 80%;
            object-fit: cover;
            position: absolute;
        }

        #second-section {
            background: linear-gradient(135deg, #dcdcdc, #f0f0f0); /* Fond blanc pour la deuxième section */
            color: #000; /* Texte noir pour la deuxième section */
            padding: 50px; /* Espacement pour la deuxième section */
            text-align: center;
        }

        @keyframes fadeInOut {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }
        .btn-primary {
            background-color: #005a5e !important; /* Add !important to override Bootstrap styles */
            border-color: #005a5e !important;
        }
    </style>
 
</head>
<body>


<center>
<div id="animated-text" text_align="center"><p>Bienvenue</p><p> Merci de visiter notre site. Explorez les fonctionnalités et profitez de votre expérience</p></div>
    </center>

<div id="animation-container">
<img class="image" src="assets/favicon/im0.jpg" alt="Image 0">
    <img class="image" src="assets/favicon/i1.jpg" alt="Image 2">
    <img class="image" src="assets/favicon/i2.jpg" alt="Image 1">
    <img class="image" src="assets/favicon/im3.jpg" alt="Image 3">
    <img class="image" src="assets/favicon/im5.jpeg" alt="Image 5">
    <img class="image" src="assets/favicon/im6.jpg" alt="Image 6">
    <img class="image" src="assets/favicon/im7.jpg" alt="Image 7">
    <img class="image" src="assets/favicon/im8.jpg" alt="Image 8">
    <img class="image" src="assets/favicon/im9.jpg" alt="Image 9">
</div>

<div id="second-section">
        <h1><b >Bivente shop Products</b> </h1>
        
 
<h3>Découvrez notre collection exclusive de produits de haute qualité.</h3>


            
<div class="row">       
   <div class="col-md-4">
      <img src="assets/favicon/product1.png" alt="Escarpins élégants" class="img-fluid">
      <h4>Escarpins Élégants</h4>
      <p>Optez pour l'élégance intemporelle avec nos escarpins de <b>Bivente shop</b> Conçus pour la femme moderne, ces talons hauts allient style sophistiqué et confort exceptionnel. La silhouette classique des escarpins est rehaussée par un talon fin qui ajoute une touche de glamour à chaque démarche.</p>
      <a href="front/index.php?id=23" class="btn btn-primary">Voir plus</a>
    </div>

    <div class="col-md-4">
    <img src="assets/favicon/product2.png" alt="Baskets Hommes" class="img-fluid">
    <h4>Baskets Hommes</h4>
    <p>Les baskets de <b>Bivente shop</b> sont le choix idéal pour un style décontracté et un confort exceptionnel. Dotées d'un design moderne et dynamique, ces baskets offrent une combinaison parfaite entre esthétique urbaine et performance.</p>
    <a href="front/index.php?id=22" class="btn btn-primary">Voir plus</a>
    </div>

 
                
    <div class="col-md-4">
    <img src="assets/favicon/product3.png" alt="Produit 3 Tendance Femme" class="img-fluid">
    <h4>Tendance femme </h4>
    <p>Découvrez l'ultime tendance avec notre Produit de <b>Bivente shop</b> pour femmes. Ces articles tendance combinent style et confort pour vous offrir une expérience de mode exceptionnelle. Avec des designs modernes et des détails uniques, ces pièces sont un ajout incontournable à votre garde-robe.</p>
    <a href="front/index.php?id=20" class="btn btn-primary">Voir plus</a>
    </div>
</div>


<div class="row">       
<div class="col-md-4">
    <img src="assets/favicon/product4.png" alt="Produit 4 Tendance Homme" class="img-fluid">
    <h4>Tendance Homme</h4>
    <p>Explorez la mode masculine avec notre Produit tendance pour hommes. Ces articles contemporains combinent style et fonctionnalité pour vous offrir une expérience de mode exceptionnelle. Avec des designs modernes et des détails uniques, ces pièces sont l'expression parfaite d'un style affirmé.</p>
    <a href="front/index.php?id=19" class="btn btn-primary">Voir plus</a>
</div>


<div class="col-md-4">
    <img src="assets/favicon/product5.png" alt="Produit 5 Bijoux & Accessoires" class="img-fluid">
    <h4>Bijoux & Accessoires</h4>
    <p>Explorez l'élégance avec notre Produits dans la catégorie Bijoux & Accessoires. Ces pièces raffinées ajoutent la touche parfaite à votre style, que ce soit pour une occasion spéciale ou pour rehausser votre look quotidien. Avec des designs uniques et une attention particulière aux détails, ces bijoux et accessoires complètent parfaitement votre garde-robe.</p>
    <a href="front/index.php?id=24" class="btn btn-primary">Voir plus</a>
</div>


 
                
<div class="col-md-4">
    <img src="assets/favicon/product6.png" alt="Produit 6 Santé & Beauté" class="img-fluid">
    <h4>Santé & Beauté</h4>
    <p>Découvrez l'art de la beauté avec notre Produits dans la catégorie Santé & Beauté. Ces articles de maquillage et soins du visage sont conçus pour sublimer votre beauté naturelle. Des nuances vibrantes aux formules de soins innovantes, notre produit offre une expérience complète pour une peau éclatante et un look impeccable.</p>
    <a href="front/index.php?id=25" class="btn btn-primary">Voir plus</a>
</div>
</div>

<div class="row">       
<div class="col-md-4">
    <img src="assets/favicon/product7.png" alt="Smartphone Tendance" class="img-fluid">
    <h4>Smartphone </h4>
    <p>Explorez la technologie de pointe avec notre Smartphone Tendance. Ce dispositif contemporain combine un design élégant et des fonctionnalités avancées pour vous offrir une expérience exceptionnelle. Avec un écran haute résolution, une caméra performante et un design sophistiqué, ce smartphone est l'accessoire parfait pour l'homme moderne.</p>
    <a href="front/index.php?id=1" class="btn btn-primary">Voir plus</a>
</div>
<div class="col-md-4">
    <img src="assets/favicon/product8.png" alt="Produit 7 Gaming" class="img-fluid">
    <h4> Gaming</h4>
    <p>Plongez dans l'univers du gaming avec notre Produits dédié aux passionnés. Cet équipement de gaming contemporain combine un design futuriste et des performances exceptionnelles pour une expérience de jeu immersive. Avec des fonctionnalités avancées, une ergonomie étudiée et un style unique, ce produit est un incontournable pour tout amateur de jeux vidéo.</p>
    <a href="front/index.php?id=3" class="btn btn-primary">Voir plus</a>
</div>                
<div class="col-md-4">
    <img src="assets/favicon/product9.png" alt="Produit 9 TV" class="img-fluid">
    <h4>TV</h4>
    <p>Découvrez l'expérience visuelle ultime avec notre TV. Ce téléviseur moderne offre une qualité d'image exceptionnelle, des fonctionnalités intelligentes et un design élégant qui s'intègre parfaitement à votre espace de divertissement. Plongez dans vos films, émissions et jeux préférés avec une clarté et une netteté inégalées.</p>
    <a href="front/index.php?id=6" class="btn btn-primary">Voir plus</a>
</div>     
<div class="col-md-4">
    <img src="assets/favicon/product10.png" alt="Produit Imprimante" class="img-fluid">
    <h4>Imprimante </h4>
    <p>Optimisez votre productivité avec notre Imprimante Polyvalente. Cette imprimante moderne offre une qualité d'impression exceptionnelle, une connectivité facile et une gamme de fonctionnalités avancées pour répondre à tous vos besoins d'impression. Que vous travailliez à domicile ou au bureau, cette imprimante est l'outil parfait pour des résultats professionnels.</p>
    <a href="front/index.php?id=8" class="btn btn-primary">Voir plus</a>
</div>
<div class="col-md-4">
    <img src="assets/favicon/product11.png" alt="Produit Ordinateur" class="img-fluid">
    <h4>Ordinateur</h4>
    <p>Explorez de nouveaux horizons avec notre Ordinateur Performant. Doté de performances exceptionnelles, d'une conception élégante et de fonctionnalités avancées, cet ordinateur est conçu pour répondre à vos besoins informatiques les plus exigeants. Que vous soyez un professionnel ou un passionné de technologie, cet ordinateur offre une expérience informatique immersive.</p>
    <a href="front/index.php?id=9" class="btn btn-primary">Voir plus</a>
</div> 
                
<div class="col-md-4">
    <img src="assets/favicon/product12.png" alt="Produit Cuisine" class="img-fluid">
    <h4>Ensemble Cuisine Haut de Gamme</h4>
    <p>Transformez votre expérience culinaire avec notre Ensemble Cuisine Haut de Gamme. Cet ensemble combine élégance, durabilité et fonctionnalité pour répondre à tous vos besoins en cuisine. Des ustensiles de qualité supérieure aux équipements innovants, cet ensemble est conçu pour inspirer la créativité dans votre cuisine.</p>
    <a href="front/index.php?id=16" class="btn btn-primary">Voir plus</a>
</div>
<div class="col-md-4">
    <img src="assets/favicon/product13.png" alt="Produit Claviers et Souris" class="img-fluid">
    <h4>Ensemble Claviers et Souris sans Fil</h4>
    <p>Optimisez votre espace de travail avec notre Ensemble Claviers et Souris sans Fil. Ces périphériques élégants offrent une liberté de mouvement, une réactivité exceptionnelle et un design ergonomique pour une expérience informatique sans effort. Que vous travailliez ou jouiez, cet ensemble améliorera votre efficacité et votre confort.</p>
    <a href="front/index.php?id=18" class="btn btn-primary">Voir plus</a>
</div>
<div class="col-md-4">
    <img src="assets/favicon/product14.png" alt="Produit Électroménager" class="img-fluid">
    <h4>Appareil Électroménager Polyvalent</h4>
    <p>Simplifiez votre vie quotidienne avec notre Appareil Électroménager Polyvalent. Cet appareil est conçu pour répondre à plusieurs besoins dans la maison, offrant commodité et efficacité. Que ce soit pour la cuisine, la buanderie ou d'autres tâches ménagères, cet appareil polyvalent deviendra rapidement un élément indispensable de votre foyer.</p>
    <a href="front/index.php?id=19" class="btn btn-primary">Voir plus</a>
</div>
<div class="col-md-4">
    <img src="assets/favicon/product15.png" alt="Produit Décoration Intérieure" class="img-fluid">
    <h4>Ensemble Décoration Élégante</h4>
    <p>Transformez votre espace avec notre Ensemble Décoration Élégante. Ces pièces soigneusement sélectionnées ajoutent une touche de style et de personnalité à votre intérieur. Des coussins décoratifs aux œuvres d'art murales, cet ensemble est conçu pour créer une ambiance chaleureuse et esthétique dans votre maison.</p>
    <a href="front/index.php?id=26" class="btn btn-primary">Voir plus</a>
</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Anime.js code for text animation
        anime.timeline({
            targets: '#animated-text',
            easing: 'easeInOutQuad',
        })
            .add({
                opacity: [0, 1],
                duration: 1500
            })
            .add({
                opacity: [1, 0],
                duration: 1500
            });
    });

    $(document).ready(function () {
        var images = $('.image');
        var currentImageIndex = 0;

        function showNextImage() {
            var currentImage = $(images[currentImageIndex]);
            currentImage.fadeOut(1000);

            currentImageIndex = (currentImageIndex + 1) % images.length;

            var nextImage = $(images[currentImageIndex]);
            nextImage.fadeIn(1000);

            setTimeout(showNextImage, 1500); // Change image every 3 seconds
        }

        // Show the first image
        $(images[currentImageIndex]).fadeIn(50);

        // Start the animation
        setTimeout(showNextImage, 50); 
    });
    
    
</script>


<?php
include('back/footer.php');
?>


</body>
</html>


