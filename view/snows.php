<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = 'RentASnow - Snows'; // Titre de la page
?>

<!--Liste des snows-->
<div class="span12">
    <h1>Les snows</h1>
    <?php foreach ($snows as $snow) { ?> <!--Foreach afin d'afficher chaque snow avec sa marque, son modèle, un bouton "plus de détails"-->
        <hr>
        <img src="view/images/snows/<?= $snow['smallimage'] ?>">
        <h4>Marque : <?= $snow['mark'] ?></h4>
        <h4>Modèle : <?= $snow['model'] ?></h4>
        <br>
        <a href="index.php?action=snowsDetails&id=<?= $snow['id'] ?>" class="btn btn-outline-dark">Plus de détails</a>
        <img src="view/images/snows/<?= $snow['smallimage'] ?>">
        <h4>Marque : <?= $snow['mark'] ?></h4>
        <h4>Modèle : <?= $snow['model'] ?></h4>
        <br>
        <a href="index.php?action=snowsDetails&id=<?= $snow['id'] ?>">Plus de détails</a>
    <?php } ?>
    <?php
    $content = ob_get_clean();
    require_once 'gabarit.php';
    ?>