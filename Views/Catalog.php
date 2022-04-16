<?php require_once('Header.php'); 
      session_start();  
?>

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
        <!-- Search Catalog -->

        <form class="form-inline mt-2 text-center d-flex justify-content-center">
            <div>
                <input class="text-center mt-3" type="search" placeholder="Recherche" aria-label="Recherche" id="search" onkeyup="searchFormation()">
                <button class="btn btn-primary" type="submit" id="buttonSearch">Recherche</button>
                <div class="mt-4">
                    <div class="form-check d-flex justify-content-center">
                        <input class="form-check-input " type="checkbox" value="" id="checkEnd" onchange="endFormation()">
                        <label class="form-check-label ps-2" for="flexCheckDefault">Formation terminée</label>
                    </div>
                    <div class="form-check d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" value="" id="checkProgress" onchange="progressFormation()">
                        <label class="form-check-label ps-2" for="flexCheckDefault">Formation en cours</label>
                    </div>
                </div>
            </div>
        </form>
        <!-- Catalog -->
        <div class="container row d-flex text-center justify-content-center mt-5">
            <div class="card m-4 divCard" id="divStart" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">test</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Commencer le cours</a>
                </div>
            </div>
            <div class="card m-4 divCard" id="divProgress" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">test2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-warning">En cours</a>
                </div>
            </div>
            <div class="card m-4 divCard" id="divStart" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">test3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Commencer le cours</a>
                </div>
            </div>
            <div class="card m-4 divCard" id="divEnd" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">test4</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-success" onclick="endFormation()">Terminée</a>
                </div>
            </div>
            <div class="card m-4 divCard" id="divStart" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">test5</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Commencer le cours</a>
                </div>
            </div>
            <div class="card m-4 divCard" id="divStart" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title">test6</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Commencer le cours</a>
                </div>
            </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
        <script src="/js/script.js"></script>
</body>

</html>