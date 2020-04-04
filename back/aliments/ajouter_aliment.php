<?php
include 'header.php';


if(!empty($_POST["nom_aliment"]) && !empty($_POST["ratio_glucide"]) && !empty($_POST["ratio_lipide"]) ){
	if (intval($_POST["ratio_glucide"])>=0 && intval($_POST["ratio_glucide"]>=0)) {

		$requete = $pdo->prepare("INSERT INTO `mmi` (`id_aliment`, `nom_aliment`, `ratio_glucide`, `ratio_lipide`) VALUES (NULL, :nom, :glucide, :lipide);");
		$requete->bindParam(':nom', $_POST['nom_aliment']);
		$requete->bindParam(':glucide', $_POST['ratio_glucide']);
		$requete->bindParam(':lipide', $_POST['ratio_lipide']);
		$requete->execute();
		$retour["success"]= true;
		$retour["message"]= "Aliment ajoute";
		$retour["resultats"]=array();

	}
	else{
	$retour["success"]= false;
	$retour["message"]= "donnees incorrectes";
	}
}
else{
	$retour["success"]= false;
	$retour["message"]= "Manque d'infos";
}


echo json_encode($retour);
