<?php
include 'header.php';


if(!empty($_POST["nom_aliment"])  ){
		$nom =$_POST["nom_aliment"];
		$requete = $pdo->prepare("DELETE FROM `mmi` WHERE `mmi`.`nom_aliment` = '$nom'");
		$requete->execute();
		$retour["success"]= true;
		$retour["message"]= "Aliment Supprime";
		$retour["resultats"]=array();

}
else{
	$retour["success"]= false;
	$retour["message"]= "Manque d'infos";
}


echo json_encode($retour);
