<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php

function getNews() // Fonction pour afficher les news en fonction de ce qui est noté dans le fichier .json
{
    return json_decode(file_get_contents("model/dataStorage/news.json"), true);
}

function getSnows() // Fonction pour afficher les snows en fonction de ce qui est noté dans le fichier .json
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

function getUsers() // Fonction pour afficher les utilisateurs en fonction de ce qui est noté dans le fichier .json
{
    return json_decode(file_get_contents("model/dataStorage/users.json"), true);
}

function createUsers($users){ // Fonction pour enregistrer des informations d'un utilisateur dans le fichier .json
    return file_put_contents('model/dataStorage/users.json', json_encode($users));
}

?>
