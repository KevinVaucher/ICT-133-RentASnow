<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Connexion";
?>

<form action="index.php?action=tryLogin" method="POST">
    <div class="form-group">
        <label for="username">Pseudo</label>
        <input type="text" class="form-control" placeholder="Entrez votre pseudo ici" name="username">
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" placeholder="Entrez votre mot de passe ici" name="password">
        <label class="loginlabels">Ne divulguez jamais votre mot de passe à qui que ce soit.</label>
        <input type="submit" class="btn btn-success submitBtns" value="Connexion">
    </div>
</form>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>