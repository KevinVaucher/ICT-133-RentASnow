<!--
Auteur : Kevin Vaucher
Date : 24.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = "RentASnow - Profil";
?>

<h2>Pseudo : <?= $_SESSION['username']?></h2>
<h2>Date d'inscription : <?= $_SESSION['date-inscription']?></h2>
<h2>Employé : <?= $_SESSION['employe']?></h2>
<br>
<a href="index.php">Retour à l'accueil</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
