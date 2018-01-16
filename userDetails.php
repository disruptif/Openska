<?php

include("header.php");
include("db.php");


//creer un object mysqli connecté à la bdd
$mysql = new MySQLi($server, $user, $password, $database);
if ($mysql->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}


// faire la requête via la méthode query et récupérer les resultat via l'objet précédement créé.
$resultats = $mysql->query("SELECT * FROM users");

//parcours les resultats
while (NULL !== ($row = $resultats->fetch_array())) { ?>
	<?=$row['id']?> : <?php echo $row['name']; ?><br /> 
<?php 
}

$mysql->close;

?>