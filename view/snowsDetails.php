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

<?php foreach ($snows as $snow) { ?>
    <?php if ($snow['id']==$_GET['id']){; ?>

        <div>
            <img src="view/images/snows/<?= $snow['smallimage'] ?> "alt="">
            <h2>Marque : <?= $snow['mark'] ?></h2>
            <h2>Modèle : <?= $snow['model'] ?></h2>
            <h2>Diponibilité : <?php $dispo=$snow['disponibility']; if($dispo==true){echo"Disponible";}else{echo"Indisponible";}?></h2>
            <br>
            <h2>Date de remise en stock : <?php $instock=$snow['returndate']; if($instock!=""){echo"<br>Le produit sera de nouveau disponible le ".$snow['returndate'];}else{echo"<br>Date de réaprovisionnement inconnue";}?></h2>
            <br>
            <a href="index.php">Retour à l'accueil</a>
    <?php if ($snow['id'] == $_GET['id']) { ?>
        <div>
            <img src="view/images/snows/<?= $snow['bigimage'] ?>">
            <h2>Marque : <?= $snow['marque'] ?></h2>
            <h2>Modèle : <?= $snow['modele'] ?></h2>
            <h2>Diponibilité : <?php $dispo = $snow['disponibility'];
                if ($dispo == true) {
                    echo "Disponible";
                } else {
                    echo "Indisponible";
                } ?></h2>
            <br>
                if ($instock != "") {
                    echo "Le produit sera de nouveau disponible le : " . $snow['dateretour'];
                } else {
                    echo "Pas de date de réapprovisionnement définie";s
                } ?></h2>
        </div>
    <?php } ?>
<?php } ?>


<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>