
<?php
include 'header.php';


if(!empty($_POST["login"]) && !empty($_POST["pwd"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"]) && !empty($_POST["weight"]) && !empty($_POST["height"]) && !empty($_POST["sexe"]) && !empty($_POST["email"]) ){
	if (intval($_POST["age"])>=0 && intval($_POST["weight"]>=0) && intval($_POST["height"]>=0)) {
		$login=$_POST["login"];
		$pwd=$_POST["pwd"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$age=$_POST["age"];
		$weight=$_POST["weight"];
		$height=$_POST["height"];
		$sexe=$_POST["sexe"];
		$email=$_POST["email"];


//le 2 doit etre remplace par $_SESSION['id']
		$requete = $pdo->prepare("UPDATE `mmiusers` SET `loginUser` = '$login', `passwordUser` = '$pwd', `nomUser` = '$nom', `prenomUser` = '$prenom', `ageUser` = '$age', `weightUser` = '$weight', `heightUser` = '$height', `sexeUser` = '$sexe', `emailUser` = '$email' WHERE `mmiusers`.`idUser` = 2;");
		$requete->execute();
		$retour["success"]= true;
		$retour["message"]= "User modifie";
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
