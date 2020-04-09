<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Déconnecté"; // titre de la page
unset($_SESSION['username']); // suppression de la session pour ne pas se souvenir des informations de connexion lors de la dernière session
?>

<h1>Vous vous êtes déconnecté</h1>
<a href="index.php?action=home">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>