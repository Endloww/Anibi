<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["entree"] = "entree.php";
    $lesActions["visite"] = "visite.php";
    $lesActions["parametrage"] = "parametrage.php";



    $lesActions["deconnexion"] = "deconnexion.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>