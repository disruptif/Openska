<?php

include("header.php");
include("db.php");


//creer un object mysqli connecté à la bdd
if ($connexion->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}

// faire la requête via la méthode query et récupérer les resultat via l'objet précédement créé.
$resultats = $connexion->exec("DELETE FROM users WHERE name='test test'");

echo "L'utilisateur a bien été supprimé!";
header("Refresh:3; url=index.php");
$resultats->closeCursor();
?>