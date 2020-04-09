<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Connecté"; // Titre de la page
?>

<h1>Vous êtes connecté</h1>
<a href="index.php">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>