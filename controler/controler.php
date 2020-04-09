<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
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

// Permet d'afficher les détails d'un snow
function snowsDetails()
{
    $snows = getSnows();
    require_once 'view/snowsDetails.php';
}

// Fait la vérification pour voir si un compte existe avec le pseudo et le mot de passe entrés par l'utilisateur
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

// Permet d'afficher la page de déconnexion et de supprimer la session actuelle
function disconnect()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    require_once 'view/disconnect.php';
}

// Permet de renvoyer sur la page d'enregistrement
function register()
{
    require_once 'view/register.php';
}

// Permet de vérifier les informations entrées lors de l'inscription pour voir si des informations ne sont pas redondantes dans ce qui est déjà écrit dans le fichier .json
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

// Permet de renvoyer sur la page personnelle
function personalPage()
{
    require_once 'view/personalPage.php';
}

// Permet de renvoyer sur le panel administrateur
function adminPanel()
{
    $users = getUsers();
    require_once 'view/adminPanel.php';
}

// Permet de supprimer des utilisateurs
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