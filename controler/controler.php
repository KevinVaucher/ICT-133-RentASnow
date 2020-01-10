<!--
Auteur : Kevin Vaucher
Date : 10.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function snows()
{
    require_once 'view/snows.php';
}

?>
