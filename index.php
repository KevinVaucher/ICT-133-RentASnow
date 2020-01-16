<!--
Auteur : Kevin Vaucher
Date : 10.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
$action = $_GET['action']; // $_GET pour créer la variable action pour le switch d'après (et

require "controler/controler.php"; // On appelle le controller pour décider de quelle page afficher en fonction du action?=

// Switch pour
switch ($action) {
    case "home" :
        home();
        break;
    case "displaySnows" :
        snows();
        break;
    case "connect" :
        connect();
        break;
    case "register" :
        register();
        break;
    default :
        require_once "view/home.php";
        break;
}
?>
