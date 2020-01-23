<!--
Auteur : Kevin Vaucher
Date : 23.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = "RentASnow - Snows";
?>


<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>