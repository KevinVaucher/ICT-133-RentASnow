<!--
Auteur : Kevin Vaucher
Date : 10.01.2020
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
        <div class="row mt-4">
            <?= date('d.M.Y', strtotime($snow['model'])) ?>
            <h4><?= $snow['mark'] ?></h4>
        </div>
        <img src="images/snows/"<?= $snow['bigimage'] ?>>
        <h2><?= $snow['smallimage'] ?></h2>
        <h2><?= $snow['returndate'] ?></h2>
        <h2><?= $snow['disponibility'] ?></h2>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>
