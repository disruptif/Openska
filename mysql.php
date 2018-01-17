<?php

server = "localhost";
$user = "annuaire";
$password = "annuaire";
$database = "annuaire";

//creer un object mysqli connecté à la bdd
$mysql = new MySQLi($server, $user, $password, $database); 


//creer un object mysqli connecté à la bdd
$mysql = new MySQLi($server, $user, $password, $database);
if ($mysql->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}

// faire la requête via la méthode query et récupérer les resultat via l'objet précédement créé.

// INSERT

if(!empty($_POST['lastname']) && $_POST['lastname'] !="") {
	//filtrage et préparation des variables
	$name = $_POST['lastname']; // TODO /!\ NTU NTU NTU NTU NTU NTU NTU
	
	$sql = "INSERT INTO users (name) VALUES ('".$name."')";
	$resultats = $mysql->query($sql );
	echo "L'utilisateur a bien été ajouté!<br />Redirection en cours";
	header("Refresh:3; url=index.php");
}


// DELETE

$resultats = $mysql->query("DELETE FROM users WHERE id=1");

if($row = $resultats->fetch_array()){
	echo "L'utilisateur a bien été supprimé!";
}


// UPDATE

$resultats = $mysql->query("UPDATE users SET name='test test' WHERE id=1");

//parcours les resultats
while (NULL !== ($row = $resultats->fetch_array())) { ?>
	<?=$row['id']?> : <?php echo $row['name']; ?><br /> 
<?php 
} 	


$mysql->close;


?>