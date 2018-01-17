<?php 

include("header.php"); 
include("User.php");
include("db.php");


// Connexion à la BDD

$resultats = $connexion->query("SELECT * FROM users");


$user1 = new User("bonnier","vincent");
$user1->setName('PafPaf Le Loup');


 /*$user2 = new User('Le Comté fruité');
 $use2->presentation();
 echo User::$compteur;
*/
?>

<body>
	<div class="row" id="content">
		<div class="col-md-12">
			<ul id="users-list">
				<?php
				while ($row = $resultats->fetch(PDO::FETCH_ASSOC)) {
					echo '<li><a href="userDetails.php?id=1">'.$row['name']." - ".$row['year']."</a></li>";
					echo "<br />"; 
				}

				$resultats->closeCursor(); 
				?> 	
			</ul>
		</br>
		<a href="userCreate.php"><button>Create</button></a>
		<a href="userUpdate.php"><button>Edit</button></a>
		<a href="userDelete.php"><button>Delete</button></a>
	</div>
</div>
</div><?php include("footer.php"); ?>