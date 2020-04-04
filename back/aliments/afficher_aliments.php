<?php
include 'header.php';

if(!empty($_GET["nom_aliment"])){
	$requete= $pdo->prepare("SELECT * FROM `mmi` WHERE `nom_aliment` LIKE :nom");
	$requete->bindParam(':nom',$_GET["nom_aliment"]);
	$requete->execute();
}
else{
	$requete= $pdo->prepare("SELECT * FROM `mmi`");
	$requete->execute();
}


$resultats=$requete->fetchAll();

$retour["success"]= true;
$retour["message"]= "Voici les aliments";
//$retour["results"]["nb_aliments"]= count($resultats);
$retour["results"]["aliments"]=$resultats;

echo json_encode($retour);
