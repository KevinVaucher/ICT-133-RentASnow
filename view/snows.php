<!--
Auteur : Kevin Vaucher
Date : 23.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = 'RentASnow - Snows';
?>


<!--Liste des snows-->
<div class="span12">
    <h1>Les snows</h1>
    <?php foreach ($snows as $snow) { ?>
        <hr>
        <img src="view/images/snows/<?= $snow['smallimage'] ?>">
            <h4>Marque : <?= $snow['mark'] ?></h4>
            <h4>Modèle : <?= $snow['model']?></h4>
        <br>
            <a href="index.php?action=snowsDetails" class="btn btn-outline-dark">Plus de détails</a>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
