<!--
Auteur : Kevin Vaucher
Date : 16.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = "RentASnow - Connexion";
?>

<form>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" placeholder="Entrez votre e-mail ici" id="email">
        <label class="loginlabels">Format : example@example.com</label>
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" placeholder="Entrez votre mot de passe ici" id="password">
        <label class="loginlabels">Ne divulguez jamais votre mot de passe à qui que ce soit.</label>
        <input type="submit" class="btn btn-success" value="Connexion" id="submitconnection">
    </div>
</form>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>