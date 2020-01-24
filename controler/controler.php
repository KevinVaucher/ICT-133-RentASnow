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
function displaySnows()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}

// Permet d'afficher la page de connexion
function connect()
{
    require_once 'view/connect.php';
}

function snowsDetails()
{
    $snows = getSnows();
    require_once 'view/snowsDetails.php';
}

// Fait la vérification pour vérifier si un compte existe avec le pseudo et le mot de passe entré par l'utilisateur

function tryLogin($username, $password)
{
    $users = getUsers();
    foreach ($users as $user) {
        if (($username == $user['username']) && $password == $user['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            require_once 'view/youareconnected.php';
            return;
        }
    }
    require_once 'view/failedconnect.php';
}

function disconnect()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    require_once 'view/disconnect.php';
}

function register()
{
    require_once 'view/register.php';
}

function tryRegister()
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($username != $user['username']) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $users[] = ["username" => $_POST["username"], "password" => $_POST["password"], "date-inscription" => $_POST["registerdate"], "employe" => $_POST["chkEmploy"]];
            createUsers($users);
            require_once 'view/youareregistered.php';
            return;
        } else {
            require_once 'view/failedregister.php';
        }
    }
}

function personalPage()
{
    require_once 'view/personalPage.php';
}

function adminPanel()
{
    $users = getUsers();
    require_once 'view/adminPanel.php';
}

function delUsers()
{
    $idUsers = $_GET['id'];
    if($idUsers != 0) {
        $users = getUsers();
        unset($users[$idUsers]);
        createUsers($users);
        require_once 'view/adminPanel.php';
    }
    else{
        require_once 'view/deladminPanel.php';
    }
}

// function employVerify()
// {
//     if (  == true) {
//         return true;
//     } else {
//         return false;
//     }
// }

?>