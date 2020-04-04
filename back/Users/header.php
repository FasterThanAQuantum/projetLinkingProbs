<?php
header('Content-Type: application/json');


try{
	$pdo = new PDO('mysql:host=localhost;dbname=rim_lamrani','root','root');
	$retour["success"]= true;
	$retour["message"]= "Connexion a la base de donnes reussie";
}catch(Exception $e){
	$retour["success"]= false;
	$retour["message"]= "Connexion a la base de donnes impossible";
}