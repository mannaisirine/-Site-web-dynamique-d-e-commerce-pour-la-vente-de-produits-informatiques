-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 10 déc. 2023 à 16:33
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `date_creation`) VALUES
(1, 'sirine', '123', '2023-11-29'),
(2, 'sirine', 'sirine', '2023-12-07');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icone` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`, `description`, `date_creation`, `icone`) VALUES
(1, 'Smartphone ', 'allie puissance, connectivité et polyvalence pour simplifier votre quotidien ', '2023-11-25 20:51:03', 'fa-solid fa-apple-whole'),
(3, 'Gaming', 'Jeux vidéos & Consoles', '2023-11-02 19:41:49', 'fa-light fa-g'),
(6, 'TV', 'Catégorie télévision', '2023-11-11 20:08:52', 'fa-thin fa-tv'),
(8, 'Imprimantes', 'Informatique', '2023-11-17 16:33:29', 'fa-solid fa-i'),
(9, 'ordinateur', 'ordinateur protable', '2023-11-18 18:47:26', 'fa-solid fa-laptop'),
(16, 'Cuisine ', 'La cuisine est un art que peu de gens maîtrise car c\'est de loin d\'être une activité facile', '2023-11-29 22:35:25', 'fa-light fa-c'),
(18, 'Claviers et souris PC', 'Accessoires pour claviers et souris ', '2023-12-01 21:37:22', 'fa-light fa-c'),
(19, 'Electromenager', 'Gros électroménagers et accessoires de rénovation', '2023-12-01 22:08:30', 'fa-light fa-e'),
(20, 'Tendances Femme', 'Gillet,Robe..', '2023-12-01 22:56:47', 'fa-light fa-f'),
(21, 'Tendance Hommes', 'Pull,Pantallon..', '2023-12-01 23:13:17', 'fa-light fa-h'),
(22, 'Baskets de mode', 'Hommes,Femmes', '2023-12-01 23:26:19', 'fa-light fa-b'),
(23, 'Escarpins pour femme', 'Talon', '2023-12-01 23:40:13', 'fa-light fa-t'),
(24, 'Bijoux & Accessoires', 'Bracelet,Montres...', '2023-12-05 21:39:31', 'fa-light fa-b'),
(25, 'Santé & Beauté', 'Maquillage , Soins visages ..', '2023-12-05 21:51:05', 'fa-light fa-s'),
(26, 'Decoration', 'Plante,CLOCK...', '2023-12-05 23:18:34', 'fa-light fa-d');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_client` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `valide` int NOT NULL DEFAULT '0',
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `id_client`, `total`, `valide`, `date_creation`) VALUES
(4, 3, '7500', 0, '2023-12-30 16:43:09'),
(5, 3, '32700', 0, '2023-12-03 16:43:34'),
(30, 2, '2945', 0, '2023-11-27 21:27:13'),
(31, 7, '2010', 1, '2023-11-28 20:51:09'),
(32, 7, '2556', 1, '2023-11-29 19:16:31'),
(33, 7, '3945', 0, '2023-11-29 22:28:30'),
(34, 7, '2367', 1, '2023-11-30 12:05:55'),
(35, 10, '367', 0, '2023-12-02 16:27:57'),
(36, 10, '363', 0, '2023-12-03 19:10:34'),
(37, 10, '207', 0, '2023-12-04 22:16:11'),
(38, 10, '124', 1, '2023-12-05 22:43:13'),
(39, 10, '299', 1, '2023-12-05 23:03:04'),
(40, 10, '1162', 1, '2023-12-06 13:28:55'),
(41, 10, '234', 0, '2023-12-08 20:15:29'),
(42, 10, '75', 0, '2023-12-08 20:25:55'),
(43, 10, '0', 0, '2023-12-08 20:27:11'),
(44, 10, '80', 0, '2023-12-08 20:27:26'),
(45, 10, '540', 0, '2023-12-08 20:28:12'),
(46, 10, '234', 0, '2023-12-09 11:33:14'),
(47, 10, '25', 1, '2023-12-09 11:38:14'),
(48, 10, '234', 0, '2023-12-10 13:07:28'),
(49, 10, '234', 1, '2023-12-10 13:20:38'),
(50, 7, '518', 1, '2023-12-10 13:42:51');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_produit` int NOT NULL,
  `id_commande` int NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `quantite` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produit` (`id_produit`),
  KEY `id_commande` (`id_commande`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id`, `id_produit`, `id_commande`, `prix`, `quantite`, `total`) VALUES
(23, 28, 33, '789', 5, '3945'),
(24, 28, 34, '789', 3, '2367'),
(25, 52, 35, '25', 1, '25'),
(26, 53, 35, '69', 3, '207'),
(27, 54, 35, '45', 3, '135'),
(28, 51, 36, '78', 2, '156'),
(29, 53, 36, '69', 3, '207'),
(30, 53, 37, '69', 3, '207'),
(31, 31, 38, '52', 2, '104'),
(32, 32, 38, '10', 2, '20'),
(33, 25, 39, '299', 1, '299'),
(34, 14, 40, '931', 1, '931'),
(35, 79, 40, '75', 1, '75'),
(36, 91, 40, '78', 2, '156'),
(37, 91, 41, '78', 3, '234'),
(38, 90, 42, '25', 3, '75'),
(39, 89, 44, '40', 2, '80'),
(40, 90, 45, '25', 6, '150'),
(41, 91, 45, '78', 5, '390'),
(42, 91, 46, '78', 3, '234'),
(43, 88, 47, '25', 1, '25'),
(44, 91, 48, '78', 3, '234'),
(45, 91, 49, '78', 3, '234'),
(46, 88, 50, '25', 2, '50'),
(47, 91, 50, '78', 6, '468');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `discount` int NOT NULL,
  `id_categorie` int NOT NULL,
  `date_creation` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `discount`, `id_categorie`, `date_creation`, `description`, `image`) VALUES
(5, 'SAMSUNG SERIE 9', '900', 0, 6, '2023-11-14 00:00:00', '', '6575bb9f6c78b1.jpg'),
(6, 'SAMSUNG S8', '6000', 6, 6, '2023-11-17 00:00:00', 'Samsung TV', '6376527e74813Television-43″-SAMSUNG-43AU9075-Smart-4K-Crystal-UHD-–-Serie-9-–-Bluetooth-–-Recepteur-Integre.jpg'),
(7, 'Hp Imprimante 3en1 Wifi a Réservoir Intégré Smart Tank 580 Garantie 1an +6 Bouteilles d’encre', '469', 2, 8, '2023-11-17 00:00:00', 'Marque: Hp | Produits similaires par Hp', '65627f60b8543imp1.jpg'),
(11, 'LG OLED evo C2 Smart TV Resolution 4K 42 pouces', '7000', 4, 6, '2023-11-18 00:00:00', 'Noir parfait (contraste infini), Fidélité des couleurs à 100 %', '6377c736816d6medium01.webp'),
(12, 'LG NANO79 Smart TV Resolution 4K 86 pouces', '12000', 4, 6, '2023-11-18 00:00:00', 'Téléviseur 4K NanoCell IPS avec Local Dimming pour des couleurs pures et des angles de vision larges\r\n\r\nProcesseur α7 Gen4 4K avec réduction du bruit en deux étapes et AI Sound, AI Picture\r\n', '6377c776dfe8f350-1.webp'),
(13, 'Samsung Galaxy A04 -6.5', '758', 10, 1, '2023-11-18 00:00:00', 'Garantie 1an\r\nMarque: Samsung | Produits similaires par Samsung', '6562722f31880tel1.png'),
(14, 'Evertek M20 Nano - 4', '950', 3, 1, '2023-11-25 00:00:00', 'Garantie 1 An\r\nMarque: Evertek | Produits similaires par Evertek', '656274be7e7aetel2.png'),
(15, 'Infinix Note 30 - 8GB RAM + 256GB - RACING BLACK', '860', 12, 1, '2023-11-25 00:00:00', 'Garantie 1an\r\nMarque: Infinix | Produits similaires par Infinix', '65627527b7fd6tel3.png'),
(16, 'Samsung Galaxy A24 - 8GO - 128GO - Silver', '1110', 5, 1, '2023-11-25 00:00:00', 'Marque: Samsung | Produits similaires par Samsung', '6562759b6f38etel4.png'),
(17, 'nfinix HOT 30 Free Fire - 8GB RAM (up to 16GB) + 128GB – SURFING GREEN ', '546', 6, 1, '2023-11-25 00:00:00', 'Marque: Infinix | Produits similaires par Infinix', '6562761c5fe77tel5.jpg'),
(18, 'nfinix HOT 30 Free Fire - 8GB RAM (up to 16GB) + 128GB – SURFING GREEN ', '546', 4, 1, '2023-11-25 00:00:00', 'Marque: Infinix | Produits similaires par Infinix', '656276307af43tel5.jpg'),
(19, 'XIAOMI Redmi Note 12 - 8Go - 128Go - 50MP - Gris Onyx ', '879', 4, 1, '2023-11-25 00:00:00', 'Garantie 1 an\r\nMarque: XIAOMI | Produits similaires par XIAOMI', '656276792c19ftel6.jpg'),
(20, 'XIAOMI Redmi Note 12s - 8Go - 256Go - 108MP - Green', '7894', 2, 1, '2023-11-25 00:00:00', 'Garantie 1 an\r\nMarque: XIAOMI | Produits similaires par XIAOMI', '656276c00c389tel7.jpg'),
(21, 'XIAOMI Redmi A2+ - 6,52 ″ - 2Go - 32Go - Light Green', '789', 3, 1, '2023-11-25 00:00:00', 'Garantie 1 an\r\nMarque: XIAOMI | Produits similaires par XIAOMI', '656276f82f452tel8.jpg'),
(22, 'Infinix Hot 30i – 6.56', '789', 4, 1, '2023-11-25 00:00:00', 'Marque: Infinix | Produits similaires par Infinix', '656277c254caetel9.jpg'),
(23, 'Marque: Infinix | Produits similaires par Infinix', '789', 5, 1, '2023-11-25 00:00:00', 'Marque: Nokia | Produits similaires par Nokia', '65627807ae2bctel9.jpg'),
(24, 'XIAOMI Redmi Note 12 - 6.6', '789', 2, 1, '2023-11-25 00:00:00', 'Marque: XIAOMI | Produits similaires par XIAOMI', '65627895666catel11.jpg'),
(25, 'Vega Téléviseur 32', '299', 6, 6, '2023-11-25 00:00:00', 'Marque: Vega | Produits similaires par Vega', '65627952068batv1.jpg'),
(26, 'Vega Téléviseur 42', '450', 8, 6, '2023-11-25 00:00:00', 'Garantie 3 Ans\r\nMarque: Vega | Produits similaires par Vega', '656279955a9fctv2.jpg'),
(27, 'Garantie 3 Ans Marque: Vega | Produits similaires par Vega', '879', 15, 6, '2023-11-25 00:00:00', 'Marque: TCL | Produits similaires par TCL', '656279c8060d5tv3.jpg'),
(28, 'Biolux TV SMART Android - 50\'\' - UHD 4K - Récepteur intégré ', '789', 0, 6, '2023-11-25 00:00:00', 'Garantie 3 ans\r\nMarque: Biolux | Produits similaires par Biolux', '65627a0c29e9etv4.jpg'),
(29, 'Toshiba TV 32\'\' S25 LED HD + RÉCEPTEUR INTÉGRÉ', '879', 9, 6, '2023-11-25 00:00:00', 'Marque: Toshiba | Produits similaires par Toshiba', '65627a4cf3bddtv5.jpg'),
(30, 'PARTAGEZ CE PRODUIT   Telefunken Televiseur - 40 D22 LED HD - Recep intégré -', '745', 0, 6, '2023-11-25 00:00:00', 'Garantie 3 an\r\nMarque: Telefunken | Produits similaires par Telefunken', '65627a8e82b7btv6.jpg'),
(31, 'Manette -Ps4 Sans Fil-Double', '52', 7, 3, '2023-11-25 00:00:00', 'Manette de jeu sans fils , pour Playstation 4\r\nLe design ergonomique ajoute au confort, tandis que les bâtons analogiques et les boutons analogiques très sensibles signe d\'une plus grande précision', '65627baf72c33gam1.jpg'),
(32, 'Everstro Mobile jeu doigt gants pour Gamer - Noir', '10', 8, 3, '2023-11-25 00:00:00', 'Marque: Everstro | Produits similaires par Everstro', '65627c45b164dgam2.jpg'),
(33, 'Marque: Everstro | Produits similaires par Everstro', '63', 2, 3, '2023-11-25 00:00:00', 'Marque: Kakusiga | Produits similaires par Kakusiga', '65627c867698egam3.jpg'),
(34, 'Generic Support Casque gaming RGB', '58', 0, 3, '2023-11-25 00:00:00', 'Marque: Generic | Produits similaires par Generic', '65627cc25c03agam4.jpg'),
(35, 'Fantech Casque micro gaming - Hg 17 - RGB', '40', 2, 3, '2023-11-25 00:00:00', 'Marque: Fantech | Produits similaires par Fantech\r\n', '65627d0fdf5c5gam5.jpg'),
(36, 'Marque: Fantech | Produits similaires par Fantech', '13', 0, 3, '2023-11-25 00:00:00', 'Frre Fire Poignée de téléphone avec un ressort, donc il est élastique et peut adapter à des téléphones de différentes tailles. Étant petit et léger, il est pratique de l\'emporter avec vous et vous pouvez profiter du jeu à tout moment Poignée élastique, (C', '65627d4b4cbccgam6.jpg'),
(37, 'Frre Fire Poignée de téléphone avec un ressort, donc il est élastique et peut adapter à des téléphon', '59', 16, 3, '2023-11-25 00:00:00', 'Marque: YESPLUS | Produits similaires par YESPLUS', '65627d8049ee2gam7.jpg'),
(38, 'Marque: YESPLUS | Produits similaires par YESPLUS', '87', 11, 3, '2023-11-25 00:00:00', 'Marque: Generic | Produits similaires par Generic', '65627e0f2418fgam8.jpg'),
(39, 'Epson Imprimante L3251 Jet d\'Encre à Réservoir Intégré - Wifi - ', '658', 0, 8, '2023-11-25 00:00:00', 'garantie 1an\r\nMarque: Epson | Produits similaires par Epson', '656280366fb44imp2.jpg'),
(40, 'Hp Imprimante Laser - LaserJet Pro M111W - Monochrome - WIFI & USB - A4 (7MD68A)', '415', 6, 8, '2023-11-25 00:00:00', 'Marque: Hp | Produits similaires par Hp\r\n', '6562806a3304bimp3.jpg'),
(41, 'Marque: Hp | Produits similaires par Hp', '669', 3, 8, '2023-11-25 00:00:00', 'Marque: Hp | Produits similaires par Hp', '656280aa1d9b8imp4.jpg'),
(42, 'PARTAGEZ CE PRODUIT   Epson Imprimante Jet d\'encre - L3210 3en1 -', '589', 0, 8, '2023-11-25 00:00:00', 'Garantie 1 an\r\nMarque: Epson | Produits similaires par Epson', '656280dd3eb51imp5.jpg'),
(43, 'Brother Pack 4 Cartouches Encre Compatible Pour Imprimante BR LC123 BKCMY - XL Format', '50', 0, 8, '2023-11-25 00:00:00', 'Marque: Brother | Produits similaires par Brother', '65628114232c4imp6.jpg'),
(44, 'Epson Ecotank L3250 3En1 Couleur - Wi-Fi - 1 an', '719', 19, 8, '2023-11-25 00:00:00', 'Marque: Epson | Produits similaires par Epson', '656281493a5e5imp7.jpg'),
(45, 'Imprimante 3d vertex nano 80X80X75MM - VEL K8600', '850', 0, 8, '2023-11-25 00:00:00', 'IMPRESSION 3D RÉVOLUTIONNAIRE\r\nL\'imprimante couleur HP Officejet Pro série K8600 est conçue pour les petites entreprises et travailleurs indépendants recherchant une imprimante polyvalente grande vitesse A3+ capable d\'imprimer des documents professionnels', '6562817a58c29imp8.jpg'),
(46, 'Lenovo Portable IP3 N4020 15.6', '670', 0, 9, '2023-11-25 00:00:00', 'Garantie 1an\r\nMarque: Lenovo | Produits similaires par Lenovo', '656282bf217f5pc1.jpg'),
(47, 'Asus PC PORTABLE [TUF GAMING F15] I5 11È GÉN 8GO RTX 3050', '789', 7, 9, '2023-11-25 00:00:00', 'Marque: Asus | Produits similaires par Asus\r\n', '656282fc95bf1pc2.jpg'),
(48, 'T-WOLF Souris sans fil rechargeable', '32', 4, 18, '2023-12-01 00:00:00', 'Marque: T-WOLF | Produits similaires par T-WOLF', '656a452d7bc99cl1.png'),
(49, 'T-WOLF Souris sans fil rechargeable', '39', 0, 18, '2023-12-01 00:00:00', 'Marque: T-WOLF | Produits similaires par T-WOLF', '656a4619d235ccl2.png'),
(50, 'Generic Pack Gaming Souris gamer + Clavier USB RGB + Hub Type-c + Tapis gamer', '78', 0, 18, '2023-12-01 00:00:00', 'Marque: Generic | Produits similaires par Generic', '656a469ca7da1cl3.png'),
(51, 'R8 Clavier Souris Gaming FR/AR -1909 - Avec rétro-éclairage', '78', 13, 18, '2023-12-01 00:00:00', 'R8 Clavier Souris Gaming FR/AR -1909 - Avec rétro-éclairage', '656a46cde10dbcl4.png'),
(52, 'sansone inox Presse agrume manuel - Inox 18/10', '25', 6, 16, '2023-12-01 00:00:00', 'Marque: sansone inox | Produits similaires par sansone inox', '656a47a371124c1.png'),
(53, 'Presse Agrumes - Multifonctions - Rechargeable - Sans Fil - Portable', '69', 0, 16, '2023-12-01 00:00:00', 'Quelques articles restants\r\n\r\n+ livraison à partir de 2.00 TND vers La Marsa', '656a4806cbaafc2.png'),
(54, 'Russell Hobbs Presse agrumes - 26010-56 - Garantie 2 Ans', '45', 0, 16, '2023-12-01 00:00:00', 'Marque: Russell Hobbs | Produits similaires par Russell Hobbs\r\n', '656a49f6bb384c3.png'),
(55, '   Moulinex PRESSE AGRUMES100W 3 Cones', '456', 0, 16, '2023-12-01 00:00:00', 'Marque: Moulinex | Produits similaires par Moulinex', '656a4a35e6294c4.png'),
(56, 'Mont Blanc Réfrigérateur - FX23 - Une seule porte - 230Litres - Inox - Garantie 2 ans', '789', 0, 19, '2023-12-01 00:00:00', 'Marque: Mont Blanc | Produits similaires par Mont Blanc', '656a4ba0c644af1.png'),
(57, 'Saba Réfrigérateur NO FROST - SN483S - 451L', '1890', 0, 19, '2023-12-01 00:00:00', 'Marque: Saba | Produits similaires par Saba', '656a4be0bc5f5f2.png'),
(58, 'Galaxy Naturel Pack encastrable - Fente - plaque 60 cm verre - hot 60cm noir - Garantie 1 an', '890', 0, 19, '2023-12-01 00:00:00', 'Marque: Galaxy Naturel | Produits similaires par Galaxy Naturel', '656a4d1a48a16f4.png'),
(59, 'Focus Hotte aspirante - 60cm - 3 Vitesses - Hotte chemine - Garantie 2 ans - F605B', '458', 2, 19, '2023-12-01 00:00:00', 'Marque: Focus | Produits similaires par Focus', '656a4c79a75ccf5.png'),
(60, 'LC Waikiki GILET pour Femmes', '45', 22, 20, '2023-12-01 00:00:00', 'Marque: LC Waikiki | Produits similaires par LC Waikiki', '656a575944c30h1.png'),
(61, 'LC Waikiki Manteau pour Femme', '45', 0, 20, '2023-12-01 00:00:00', 'Marque: LC Waikiki | Produits similaires par LC Waikiki', '656a579fe0c8ah2.png'),
(62, 'LC Waikiki Pullover pour Femme', '45', 0, 20, '2023-12-01 00:00:00', 'Marque: LC Waikiki | Produits similaires par LC Waikiki', '656a57ed48dach3.png'),
(63, 'LC Waikiki Pantalon pour Femme', '45', 11, 20, '2023-12-01 00:00:00', 'Marque: LC Waikiki | Produits similaires par LC Waikiki', '656a58641fd28h4.png'),
(64, 'Surchemise - à - Larges - Carreaux', '29', 0, 20, '2023-12-01 00:00:00', ' livraison à partir de 2.00 TND vers La Marsa', '656a58c224bcfh5.png'),
(65, 'LC Waikiki Blouse manches longues pour Femmes', '24', 0, 20, '2023-12-01 00:00:00', 'Marque: LC Waikiki | Produits similaires par LC Waikiki', '656a59a0b0eabh6.png'),
(66, 'LC Waikiki T-SHIRT MANCHES COURTES BASIC Pour Femmes', '78', 13, 20, '2023-12-01 00:00:00', 'Marque: LC Waikiki | Produits similaires par LC Waikiki', '656a59e9782a1h7.png'),
(67, 'Dream Fashion Pull noir avec tulle', '78', 0, 20, '2023-12-01 00:00:00', 'Marque: Dream Fashion | Produits similaires par Dream Fashion', '656a5a30dc5bbh8.png'),
(68, 'Exist Pull - P00771 - NOIR', '35', 0, 21, '2023-12-01 00:00:00', 'Marque: Exist | Produits similaires par Exist', '656a5abc21525g1.png'),
(69, 'Hummel Tenue Promo Bleu - t96100-1008', '39', 0, 21, '2023-12-01 00:00:00', 'Marque: Hummel | Produits similaires par Hummel', '656a5be14a78dg2.png'),
(70, 'Exist Pantalon - T00053 - NOIR', '89', 0, 21, '2023-12-01 00:00:00', 'Marque: Exist | Produits similaires par Exist', '656a5c839533dp1.png'),
(71, 'Exist Blazer - V00034 - Noir', '84', 0, 21, '2023-12-01 00:00:00', 'Marque: Exist | Produits similaires par Exist', '656a5cd8226a9p3.png'),
(72, 'Exist Sweat - P00832 - AGRIS', '78', 4, 21, '2023-12-01 00:00:00', 'Marque: Exist | Produits similaires par Exist', '656a5d1bdedbep6.png'),
(73, 'Icshoes+ Sneakers LC B20 Blanc Bleu et Gris - Simili cuir - Nubuck - Lacets', '17', 0, 22, '2023-12-01 00:00:00', 'Marque: Icshoes+ | Produits similaires par Icshoes+', '656a5e367c515b1.png'),
(74, 'Icshoes+ Sneakers LC 066 Blanc et Marron - Simili Cuir - Design Nubuck - Pour Homme', '45', 0, 22, '2023-12-01 00:00:00', 'Marque: Icshoes+ | Produits similaires par Icshoes+', '656a5eb0406c9b2.png'),
(75, 'Icshoes+ Sneakers LC B20 Noir et Vert - Simili cuir - Nubuck - Lacets ', '78', 0, 22, '2023-12-01 00:00:00', 'Marque: Icshoes+ | Produits similaires par Icshoes+', '656a5f11ca081b4.png'),
(76, 'Icshoes+ Baskets LC B45 - Simili cuir - Noir, Blanc et Beige - Pour Homme', '78', 0, 22, '2023-12-01 00:00:00', 'Marque: Icshoes+ | Produits similaires par Icshoes+', '656a5f7af2f9cb5.png'),
(77, 'Icshoes+ Baskets LC B45 - Simili cuir - Gris, Blanc et Beige - Pour Homme', '57', 0, 22, '2023-12-01 00:00:00', 'Marque: Icshoes+ | Produits similaires par Icshoes+', '656a5fd7e6e26b6.png'),
(78, 'LC Shoes + - Sneakers LC S60 Noir et Orange - Textile - Simili Cuir - Nubuck', '98', 0, 22, '2023-12-01 00:00:00', 'Sneakers LC S60 Noir et Orange - Textile - Simili Cuir - Nubuck', '656a605603455b7.png'),
(79, 'Icshoes+ Escarpin LC 428 - Talon bloc Carré - Noir - Nubuck', '75', 0, 23, '2023-12-01 00:00:00', 'Marque: Icshoes+ | Produits similaires par Icshoes+', '656a618e85d0dta1.png'),
(80, 'Escarpin LC 339 - Talon Bloc - Ceinture Croisée - Beige Vernis', '78', 2, 23, '2023-12-01 00:00:00', ' livraison à partir de 2.00 TND vers La Marsa', '656a61cf2ddc0ta2.png'),
(82, 'Armin Bague Femme C20 - Argent 925', '260', 0, 24, '2023-12-05 00:00:00', 'Marque: Armin | Produits similaires par Armin', '656f8b17e18f0b1.png'),
(83, 'Armin Pack P018 - Ensemble de Bijoux - Cubique Fine', '2809', 1, 24, '2023-12-05 00:00:00', 'Marque: Armin | Produits similaires par Armin', '656f8b3b044fcb2.png'),
(84, 'Armin Boucles D\'oreilles S066 - Vintage', '78', 0, 24, '2023-12-05 00:00:00', 'Marque: Armin | Produits similaires par Armin', '656f8b77a0ed3b3.png'),
(85, 'Daniel Wellington Montre Femme authentique - Classic Roselyn - DW00100271 - Rouge - Garantie 2 ans', '320', 0, 24, '2023-12-05 00:00:00', 'Marque: Daniel Wellington | Produits similaires par Daniel Wellington', '656f8bb1193d4b4.png'),
(86, 'Lacoste Montre Femme authentique - 2001026 - Silver - Garantie 2 ans', '320', 1, 24, '2023-12-05 00:00:00', 'Lacoste Montre Femme authentique - 2001026 - Silver - Garantie 2 ans', '656f8be498bdcb5.png'),
(87, 'Cajewels bracelet -argent 925- coeur', '58', 0, 24, '2023-12-05 00:00:00', 'Marque: Cajewels | Produits similaires par Cajewels', '656f8c245ab79b6.png'),
(88, 'Ucanbe Palette de fard à paupières - FANTASY- 02', '25', 0, 25, '2023-12-05 00:00:00', 'Marque: Ucanbe | Produits similaires par Ucanbe', '656f8d72d61f9b7.png'),
(89, 'Maybelline New York Mascara Sky High lash sensational', '40', 0, 25, '2023-12-05 00:00:00', 'Marque: Maybelline New York | Produits similaires par Maybelline New York', '656f8da21a142b8.png'),
(90, 'Maybelline New York Rouge à lèvre Mat Liquide - Superstay Matte Ink - 65 Seductress', '25', 0, 25, '2023-12-05 00:00:00', 'Marque: Maybelline New York | Produits similaires par Maybelline New York', '656f8dd3866a0b9.png'),
(91, 'Gabrini Highlighter - 06', '78', 0, 25, '2023-12-05 00:00:00', 'Marque: Gabrini | Produits similaires par Gabrini', '656f8e05cd927b10.png'),
(92, 'Maybelline New York Instant anti-age - Gomme anti-cernes - 01 Chair clair', '28', 1, 25, '2023-12-05 00:00:00', 'Marque: Maybelline New York | Produits similaires par Maybelline New York', '656f8e45186edb11.png'),
(93, 'Pot décoratif de gazon artificiel tête à lunettes-Rouge', '20', 5, 26, '2023-12-05 00:00:00', '+ livraison à partir de 2.00 TND vers La Marsa', '656fa2c1f28c6b12.png'),
(94, 'Autocollant mural papier peint WC- noir', '19', 2, 26, '2023-12-05 00:00:00', '+ livraison à partir de 2.00 TND vers La Marsa', '656fa359a1f55b13.png'),
(95, 'Eva Pot créatif des fleurs artificielles en forme Humaine', '15', 2, 26, '2023-12-05 00:00:00', 'Marque: Eva | Produits similaires par Eva', '656fa49d1a017b14.png'),
(96, 'DIY CLOCK Montre murale noir 3D chiffres romains 60 cm', '29', 0, 26, '2023-12-05 00:00:00', '+ livraison à partir de 2.00 TND vers La Marsa', '656fa4d3017f0b15.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `date_creation`) VALUES
(7, 'sirine', 'sirine', '2023-11-19'),
(8, 'sirine@enis.tn', '12', '2023-11-22'),
(10, 'sirine', '123', '2023-11-22'),
(13, 'sirine', '1234', '2023-11-22'),
(14, 'sonia', '1234', '2023-11-22'),
(16, 'sss', 'sss', '2023-11-22'),
(20, 'sirine', '123', '2023-12-05'),
(21, 'sirine', '123', '2023-12-05'),
(27, 'sirine', '12345', '2023-12-06'),
(28, 'sirine', '$2y$10$c2kjUM8XLuR6.8Xo07VmEumPUF1w2gZ.Nfl2.QuH3x0c6AGeS8TQq', '2023-12-07'),
(29, 'sirine', '$2y$10$d6HMGMZOoMb5Ta0bEytnsehHqw3Dnz/nfhIHyRb/NsMaACeew7vCq', '2023-12-08'),
(30, 'sirine', '$2y$10$JlRUa4GqmT29ESRuHAfoieZNtdRLibMnHmllyzNXVKiShrCnDWp62', '2023-12-08'),
(31, 'sirine', '$2y$10$j.f0Q.C.lzM6MNt4owf03O7H02TrzgDIGKivBad/6rES50/bTLvQi', '2023-12-09'),
(32, 'sirine', '$2y$10$DOdO/jrLvoZbLUkuAMri2.7Hmi0GRmtSXRb2YicWyim0W02AjoPb.', '2023-12-09'),
(33, 'sirine', '$2y$10$CxGhPFlEfk4pL8ZLqebaVeqsUcDdbcmJeYYowbkm/yozPiNvD31F2', '2023-12-09'),
(34, 'sss', '$2y$10$l6v6eYCQVu4JDuJYMK.ZTuDxjG5LxEjCfE1xSsSqxtJWncWL/KvDa', '2023-12-09'),
(35, 'sirine', '$2y$10$4eIbaOcUF7hRkHUygSLuq.MSeP8hDE/tXRuvVUbuopDc.otnxM0j6', '2023-12-09'),
(36, 'sirine', '$2y$10$qButPLlQefXM7Pr5hO5q6.1aCHIctbV/lS8DwlEg42T1rwdFhk9UW', '2023-12-09'),
(37, 'sirine', '$2y$10$UTGl0Q5tNPFtHziOUX2iU.dxc6fg0YMSVsbCle9zD2JAr5icP9yZO', '2023-12-09'),
(39, 'sirine', '$2y$10$dIti5Bgqsr/TTMQhe/DNUe9Jfh1/AWW859GbY9PS0TEEBoWiT.Fbi', '2023-12-10'),
(40, 'sirine', '$2y$10$PpcQETDBQoUN9KpmmIXt4u3TgLh6Jy7xE5g4F2PKb6Se6nvMNRNgm', '2023-12-10'),
(41, 'sirine', '$2y$10$7CS8bUj5Z9xTWeoXi5l00e6rhOaEBXPp54kdoWyXSt.agKV8Vb/me', '2023-12-10'),
(42, 'sirine', '$2y$10$qriIQldimMhq8n.9pzqS0OCyRyCbgWd2cCGjU6XIyQv70hCLGSQXu', '2023-12-10'),
(43, 'sirine', '$2y$10$G.6JUByz3GnLwAaUfpN6.OtkglIeKvdlY47D36ZaC5NXPaKJ5RVB2', '2023-12-10');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
