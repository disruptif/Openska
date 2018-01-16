<?php

include("header.php");
include("db.php");

// 1er étape : voir si on m'appel pour afficher le formulaire
// ou pour traiter une soumission de formulaire

print_r($_POST);

if(!empty($_POST['lastname']) && $_POST['lastname'] !="") {
	//filtrage et préparation des variables
	$name = $_POST['lastname']; // TODO /!\ NTU NTU NTU NTU NTU NTU NTU
	
	$sql = "INSERT INTO users (name) VALUES ('".$name."')";
	$resultats = $mysql->query($sql );
	echo "L'utilisateur a bien été ajouté!<br />Redirection en cours";
	header("Refresh:3; url=index.php");
}

// Affiche les résultats
$resultats = $mysql->query("SELECT * FROM users");


?>

<body>
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row" id="content">
			<div class="col-md-12">
				<form method="post">
					<div class="form-group">
						<input type="text" id="name" name="lastname" placeholder="Votre nom" />
						<button type="submit" class="btn btn-primary">Valider</button>
					</div>
				</form>
		</div>
	</div>
</div>

<? php include("footer.php"); ?>
<?php
	$mysql->close;
?>