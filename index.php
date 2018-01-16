<?php 

include("header.php"); 
include("db.php");
include("User.php");

// Affiche les résultats
$resultats = $mysql->query("SELECT * FROM users");


$user1 = new User("bonnier","vincent");
 
var_dump($user1);
/*
 $user1 = setName('PafPaf Le Loup');
 

 $user2 = new User('Le Comté fruité');
 $use2->presentation();
 

echo User::$compteur;
*/
?>

<body>
	<div class="row" id="content">
		<div class="col-md-12">
			<ul id="users-list">
				<?php
				while (NULL !== ($row = $resultats->fetch_array())) {
					echo '<li><a href="userDetails.php?id=1">'.$row['name']."</a></li>";
					echo "<br />"; 
				}
				?> 	
			</ul>
		</br>
		<a href="userCreate.php"><button>Create</button></a>
		<a href="userUpdate.php"><button>Edit</button></a>
		<a href="userDelete.php"><button>Delete</button></a>
	</div>
</div>
</div><?php include("footer.php"); ?>