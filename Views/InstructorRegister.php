<?php require_once('Header.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/ECOIT/Css/style.css">
    <title>ECOIT</title>
</head>

<body>
    <div class="pt-4">
        <div class="col text-center">
            <a type="button" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/ECOIT/index.php"
            class="btn-outline-secondary w-10 mb-2 mt-5 btn rounded-4 col-4 text-center">Se connecter</a>
        </div>
    </div>
    <div class="modal-dialog" role="log">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-body p-5 pt-0 mt-5">
                <form class="" method="post"> 
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-4" name="email" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Adresse Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" name="name" id="floatingInput"
                            placeholder="Doe">
                        <label for="floatingInput">Nom</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" name="name" id="floatingInput"
                            placeholder="John">
                        <label for="floatingInput">Prénom</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" name="password" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Mot de passe</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" name="description" id="floatingInput"
                            placeholder="Décrivez vos spécialités">
                        <label for="floatingInput">Spécialités</label>
                    </div>
                    <div class="form-floating mb-3">
                        <p>Photo de profil</p>
                        <input type="file" class="form-control rounded-4" name="file" id="floatingInput"
                            placeholder="Photo">
                    </div>
                    <div class="col text-center">
                        <button class="w-50 mb-2 mt-5 btn rounded-4 btn-primary col text-center" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>