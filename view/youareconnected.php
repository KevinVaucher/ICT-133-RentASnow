<!--
Auteur : Kevin Vaucher
Date : 16.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = "RentASnow - Connecté";
?>

<h1>Vous êtes connecté</h1>
<a href="home.php">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>