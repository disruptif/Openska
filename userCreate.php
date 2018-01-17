<?php

include("header.php");
include("db.php");

// 1er étape : voir si on m'appel pour afficher le formulaire
// ou pour traiter une soumission de formulaire

if(!empty($_POST['_name']) && $_POST['_year'] !="") {
	//filtrage et préparation des variables
	$name = $_POST['_name']; // TODO /!\ NTU NTU NTU NTU NTU NTU NTU
	$year = $_POST['_year'];

	$resultats = $connexion->prepare("INSERT INTO users (name, year) VALUES (:_name, :_year)");
	$resultats = $bindParam(':name', $name);
	$resultats = $bindParam(':year', $year);
	$resultats->execute();

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
						<input type="text" name="_name" placeholder="Votre nom" />
						<input type="number" name="_year" placeholder="Votre âge" />
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