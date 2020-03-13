<?php
/*
Auteur : Kevin Vaucher
Date : 27.02.2020
Decsription : Exercice CRUD ICT-151
Version : 1.0
 */

function GetPDO(){
    require ".const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
}
function Create()
{
    try{
        require ".const.php";
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = 'SELECT * FROM filmmakers';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
        $dbh = null;
        return $queryResult;
    }
    catch (PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

// Fonction pour recevoir la liste de tous les réalisateurs
function GetAll()
{
    try {
        require ".const.php";
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = 'SELECT * FROM filmmakers';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

// Fonction pour recevoir les informations d'un réalisateur grâce à son nom
function GetFilmMakerByName(){
    try{
        require ".const.php";
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    }
    catch (PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

// Fonction pour recevoir la liste d'un réalisateur
function GetOne($id)
{
    try {
        require ".const.php";
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = "SELECT * FROM filmmakers WHERE id=:id";
        $statment = $dbh->prepare($query);//prepare query
        $statment->execute(['id' => $id]);//execute query
        $queryResult = $statment->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

// Fonction pour mettre à jour la liste des réalisateurs
function Update()
{
    try {
        require ".const.php";
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $query = "UPDATE filmmakers SET
        filmmakersnumber=:filmmakersnumber,
        firstname=:firstname,
        lastname=:lastname,
        birthname=:birthname,
        nationality=:nationality
        WHERE id=:id";
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetch();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

// Fonction pour supprimer un réalisateur
function Delete()
{
    try {
        require ".const.php";
        $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetch();//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}