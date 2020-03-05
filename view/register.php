<!--
Auteur : Kevin Vaucher
Date : 24.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
ob_start();
$title = "RentASnow - Inscription";
?>

<form action="index.php?action=tryRegister" method="POST">
    <div class="form-group">
        <label for="username">Pseudo</label>
        <input type="text" class="form-control" placeholder="Entrez votre pseudo ici" name="username">
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" placeholder="Entrez votre mot de passe ici" name="password">
        <label class="loginlabels">Ne divulguez jamais votre mot de passe à qui que ce soit.</label>
        <br>
        <label for="registerdate">Date d'inscription</label>
        <input type="date" class="form-control" name="registerdate">
        <br>
        <label for="chkEmploy">Êtes-vous un employé ?</label>
        <br>
        <input type="checkbox" name="chkEmploy">
        <input type="submit" class="btn btn-success submitBtns" value="S'inscrire">
    </div>
</form>

<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

