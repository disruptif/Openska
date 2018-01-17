<?php 

/*$server = "localhost";
$user = "annuaire";
$password = "annuaire";
$database = "annuaire";

//creer un object mysqli connecté à la bdd
$mysql = new MySQLi($server, $user, $password, $database);

*/


//pdo

//Connexion 
$dsn = 'mysql:dbname=annuaire;host=localhost';
$user = 'annuaire';
$password = 'annuaire';

try {
    $connexion = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}




?>
