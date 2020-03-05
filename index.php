<!--
Auteur : Kevin Vaucher
Date : 10.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
$action = $_GET['action']; // $_GET pour créer la variable action pour le switch d'après (et

require "controler/controler.php"; // On appelle le controller pour décider de quelle page afficher en fonction du action?=

session_start();

// Switch pour
switch ($action) {
    case "home" :
        home();
        break;
    case "displaySnows" :
        displaySnows();
        break;
    case "connect" :
        connect();
        break;
    case "tryLogin" :
        $username = $_POST['username'];
        $password = $_POST['password'];
        tryLogin($username, $password);
        break;
    case "snowsDetails" :
        snowsDetails();
        break;
    case "disconnect" :
        disconnect();
        break;
    case "register" :
        register();
        break;
    case "tryRegister" :
        tryRegister();
        break;
    case "personalPage" :
        personalPage();
        break;
    case "adminPanel" :
        adminPanel();
        break;
    case "delUsers" :
        delUsers();
        break;
    default :
        require_once "view/index.php";
        break;
}
// $tab = json_decode(file_get_contents('Snows.json'), true);
// var_dump($tab);
// $tab[3]['modele'] = 'New K067'; // update
// unset($tab[7]); // delete

// $tab[] = ["id" => 11, "modele" => "Carrel", "marque" => "CPNV", "bigimage" => "B101.jpg", "smallimage" => "B101_small.jpg", "dateretour" => "", "disponible" => true];
// file_put_contents('Snows.json', json_encode($tab));

?>