<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Erreur d'inscription";
?>

<h2>Ce pseudo  est déjà pris, veuillez en mettre un autre</h2>
<a href="index.php?action=register">Retour à la page d'inscription</a>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
