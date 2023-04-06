<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $titre ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/base.css">

    </head>
    <body>

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="./?action=accueil" >
            <button class="navbar-brand text-white btn btn-dark me-2" href="#" type="submit">Anibi</button>
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="./?action=entree">
                            <button class="btn btn-outline-secondary rounded-2 me-2" type="submit">Nouvelle entrée</button>
                        </a>
                    </li>
                    </br>
                    <li class="nav-item">
                        <a href="./?action=visite">
                        <button class="btn btn-outline-secondary rounded-2 me-2" type="submit">Visites en cours</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./?action=parametrage">
                            <button class="btn btn-outline-secondary rounded-2 me-2"  type="submit">Paramétrage des expos</button>
                        </a>
                    </li>

                </ul>

                <?php
                if (isLoggedOn()) { ?>
                    <a href="./?action=deconnexion" >
                        <button class="btn btn-dark rounded-2 me-2" type="submit">Deconnexion</button>
                    </a>
                <?php }
                else { ?>
                <a href="./?action=connexion" >
                    <button class="btn btn-dark rounded-2 me-2" type="submit">Connexion</button>
                </a>
                <?php } ?>

                </form>
            </div>
        </div>
    </nav>

<center>
<div class="bg-img" style="background-image: url('./image/Anibi.png') ; height: 50vh;"></div>
<br />
</center>



    <div id="corps">
        