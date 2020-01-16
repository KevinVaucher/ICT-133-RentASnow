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

// Permet d'afficher la page avec la liste des snowboards
function snows()
{
    require_once 'view/snows.php';
}

// Permet d'afficher la page de connexion
function connect()
{
    require_once 'view/connect.php';
}

// Permet d'afficher la page d'enregistrement d'un compte
function register()
{
    require_once 'view/register.php';
}
?>
