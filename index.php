<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->

<?php
$action = $_GET['action']; // $_GET pour créer la variable action pour le switch d'après (et

require "controler/controler.php"; // On appelle le controller pour décider de quelle page afficher en fonction du action?=

session_start();

// Switch pour sélectionner les fonctions à appeler en fonction du query string
switch ($action) {
    case "home" :
        home();
        break;
    case "displaySnows" : // Appelle la fontion displaySnows pour afficher la page des snows
        displaySnows();
        break;
    case "connect" :
        connect(); // Appelle la fontion connect pour afficher la page de connexion
        break;
    case "tryLogin" : // Appelle la fontion tryLogin pour vérifier les informations entrées par l'utilisateur
        $username = $_POST['username'];
        $password = $_POST['password'];
        tryLogin($username, $password);
        break;
    case "snowsDetails" : // Appelle la fontion snowsDetails pour afficher les détails d'un snow
        snowsDetails();
        break;
    case "disconnect" : // Appelle la fontion disconnect pour afficher la page qui dit qu'on est déconnecté
        disconnect();
        break;
    case "register" : // Appelle la fontion register pour afficher la page pour s'enregistrer
        register();
        break;
    case "tryRegister" : // Appelle la fontion tryRegister pour vérifier les informations entrées par l'utilisateur
        tryRegister();
        break;
    case "personalPage" : // Appelle la fontion personalPage pour afficher la page des d'informations sur l'utilisateur connecté
        personalPage();
        break;
    case "adminPanel" : // Appelle la fontion adminPanel pour afficher le panel administrateur
        adminPanel();
        break;
    case "delUsers" : // Appelle la fontion delUsers pour afficher la page avec la liste des utilisateurs enregistrés
        delUsers();
        break;
    default : // Renvoie sur la page d'accueil si la query string n'est pas prise en compte par les cases
        require_once "view/home.php";
        break;
}

?>