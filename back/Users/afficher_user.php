<?php
include 'header.php';

if(!empty($_POST["nomUser"])){
	$requete= $pdo->prepare("SELECT * FROM `mmiusers` WHERE `nomUser` LIKE :nom");
	$requete->bindParam(':nom',$_POST["nomUser"]);
	$requete->execute();
}
else{
	$requete= $pdo->prepare("SELECT * FROM `mmiusers`");
	$requete->execute();
}


$resultats=$requete->fetchAll();

$retour["success"]= true;
$retour["message"]= "Voici les users";
//$retour["results"]["nb_aliments"]= count($resultats);
$retour["results"]["aliments"]=$resultats;

echo json_encode($retour);
