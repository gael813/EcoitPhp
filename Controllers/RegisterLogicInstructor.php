<?php
    require_once('configInstructor.php');

    if(isset($_POST['email']) && isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['password']) && isset($_POST['description']) && isset($_POST['file']))
    {
        $email = htmlspecialchars($_POST['email']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $password = htmlspecialchars($_POST['password']);
        $description = htmlspecialchars($_POST['description']);
        $file = htmlspecialchars($_POST['file']);

        $check = $bdd->prepare('SELECT email, lastName, firstName, password, description, file FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0)
        {
             if(strlen($email) <= 100)
             {
                 if(strlen($lastName) <= 100)
                 {
                    if(strlen($firstName) <= 100)
                    {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            $password = hash('sha256', $password);

                            $insert = $bdd->prepare('INSERT INTO users(email, lastName, firstName, password, description, file) VALUES (:email, :lastName, :firstName, :password, :description, :file)');
                            $insert->execute(array(
                                'email' => $email,
                                'lastName' => $lastName,
                                'firstName' => $firstName,
                                'password' => $password,
                                'description' => $description,
                                'file' => $file
                            ));
                            header('Location:../Views/Register.php?reg_err=success');
                        }
                    }
                    else
                    {
                        header('Location: ../Views/Register.php?reg_err=firstName_length');
                    }
                 }
                 else
                 {
                    header('Location: ../Views/Register.php?reg_err=lastName_length');
                 }
             }
             else
             {
                 header('Location: ../Views/Register.php?reg_err=email_length');
             }
        }
        else
        {
            header('Location: ../Views/Register.php?reg_err=already');
        }
    }