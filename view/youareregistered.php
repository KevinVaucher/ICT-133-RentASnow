<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Inscrit"; // Titre de la page
?>

<h2>Vous vous êtes inscrit, bienvenue !</h2>
<a href="index.php">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
