<?php 
    $serveur = "localhost";
    $dbname = "ecoit";
    $user = "root";
    $pass = "root";

    try{
        //Database connexion
        $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        //Create users table
        $form = "CREATE TABLE users(
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100),
            pseudo VARCHAR(100),
            password VARCHAR(100))";

        $bdd->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }