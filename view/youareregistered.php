<!--
Auteur : Kevin Vaucher
Date : 24.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = "RentASnow - Inscrit";
?>

<h2>Vous vous êtes inscrit, bienvenue !</h2>
<a href="index.php">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
