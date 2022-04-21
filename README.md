CREATE database in mysql server

Write code sql to command line 

-> CREATE DATABASE ecoit;

-> CREATE TABLE users(
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL,
            pseudo VARCHAR(100) NULL,
            password VARCHAR(100) NOT NULL,
            lastName VARCHAR(100) NULL,
            firstName VARCHAR(100) NULL,
            description VARCHAR(500) NULL,
            file VARCHAR(200) NULL,
            statut INT NOT NULL
);

serveur = "localhost";
dbname = "ecoit";
user = "root";
pass = "root";