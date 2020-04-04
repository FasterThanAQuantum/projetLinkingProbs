<?php
include 'header.php';


if(!empty($_POST["nom"]) ){
		$nom =$_POST["nom"];
		$requete = $pdo->prepare("DELETE FROM `mmiusers` WHERE `mmiusers`.`nomUser` = '$nom'");
		$requete->execute();
		$retour["success"]= true;
		$retour["message"]= "User supprime";
		$retour["resultats"]=array();
}
else{
	$retour["success"]= false;
	$retour["message"]= "Manque d'infos";
}


echo json_encode($retour);
