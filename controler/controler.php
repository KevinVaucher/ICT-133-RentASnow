<!--
Auteur : Kevin Vaucher
Date : 10.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
require_once 'model/model.php';

// This file contains nothing but functions

// Permet d'afficher la page d'accueil
function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

// Permet d'afficher la page avec la liste des snowboards et charger le fichier Json
function snows()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}

// Permet d'afficher la page de connexion
function connect()
{
    require_once 'view/connect.php';
}

// Permet d'afficher la page d'enregistrement d'un compte et charger le fichier Json
function users()
{
    $users = getUsers();
    $username = $_POST['email'];
    $password = $_POST['password'];
    foreach ($users as $user) {
        if (($username == $user['username']) && $password == $user['password']) {
            $_SESSION['email'] = $username;
            $_SESSION['password'] = $password;
            require_once 'view/connect.php';
        }

    }
}
    ?>