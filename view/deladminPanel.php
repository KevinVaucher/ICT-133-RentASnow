<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Error";
?>
<h2>Impossible de supprimer le compte administrateur</h2>
<br>
<a href="index.php?action=adminPanel">Retour au panel administrateur</a>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>


