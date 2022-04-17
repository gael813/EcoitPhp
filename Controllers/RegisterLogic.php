<?php

    require_once('Config.php');

    if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0)
        {
             if(strlen($pseudo) <= 100)
             {
                 if(strlen($email) <= 100)
                 {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $password = hash('sha256', $password);

                        $insert = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES (:pseudo, :email, :password)');
                        $insert->execute(array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password
                        ));
                        header('Location:../Views/Register.php?reg_err=success');
                    }
                 }
                 else
                 {
                    header('Location: ../Views/Register.php?reg_err=email_length');
                 }
             }
             else
             {
                 header('Location: ../Views/Register.php?reg_err=pseudo_length');
             }
        }
        else
        {
            header('Location: ../Views/Register.php?reg_err=already');
        }
    }