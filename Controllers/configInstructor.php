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
        $form = "CREATE TABLE instructors(
            id INT AUTO_INCREMENT PRIMARY KEY,
            lastName VARCHAR(100),
            firstName VARCHAR(100),
            password VARCHAR(100),
            description VARCHAR(500),
            file VARCHAR(200)";

        $bdd->exec($form);
    }
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }