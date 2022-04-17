<?php 
/*
    try
    {
        $user = 'root';
        $pass = '';

        $bdd = new PDO('mysql:host=localhost;dbname=ecoit', $user, $pass);
    }
    catch(PDOException $e)
    {
       print 'Erreur'.$e->getMessage() . "<br/>";
       die;
    }
*/

    $serveur = "localhost";
    $dbname = "ecoit";
    $user = "root";
    $pass = "root";

    try{
        //On se connecte à la BDD
        $bdd = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //On crée une table users
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