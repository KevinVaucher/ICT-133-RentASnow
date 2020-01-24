<!--
Auteur : Kevin Vaucher
Date : 10.01.2020
Description : Projet Rent A Snow ICT-133
Version : 1.0
-->

<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"), true);
}

function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"), true);
}

function createUsers($users){
    return file_put_contents('model/dataStorage/users.json', json_encode($users));
}

?>
