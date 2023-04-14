<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pokedex</title>
    <style>

    </style>
</head>
<body>
    <!--navbar -->
    <nav class="navbar navbar-dark bg-danger">
    <div class="d-inline">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="img/PokedexBigButton.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
            </a>
        </div>
    </div>
    <div class="d-inline">
        <div class="position-relative top-0 start-0">
            <div class="container-fluid">
                <img src="img/PokedexRedButton.png" alt="" width="60" height="60" >
                <img src="img/PokedexYellowButton.png" alt="" width="60" height="60" >
                <img src="img/PokedexGreenButton.png" alt="" width="60" height="60" >
            </div>
        </div>
    </div>
    </nav>


    <div class="container">
        <form action="index.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/Bulbasaur001.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bulbasaur</h5>
                            <p class="card-text">Un texto de ejemplo rápido para colocal cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                            <input type="submit" class="btn btn-primary" name="bulbasaur" value="Reproducir">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/Charmander004.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Charmander</h5>
                            <p class="card-text">Un texto de ejemplo rápido para colocal cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                            <input type="submit" class="btn btn-primary" name="charmander" value="Reproducir">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="img/Squirtle007.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Squirtle</h5>
                            <p class="card-text">Un texto de ejemplo rápido para colocal cerca del título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                            <input type="submit" class="btn btn-primary" name="squirtle" value="Reproducir">
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div class="position-relative">
        <div class="position-relative bottom-0 start-50 translate-middle-x">
            <div class="card bg-primary" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Decir el abecedario</h5>
                    <input type="submit" class="btn btn-outline-info" name="abecedario" value="Reproducir">
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>

<?php
include_once('pokemon.php')
?>