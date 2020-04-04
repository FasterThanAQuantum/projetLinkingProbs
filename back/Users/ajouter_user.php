<?php

include 'header.php';


if(!empty($_POST["login"]) && !empty($_POST["pwd"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"]) && !empty($_POST["weight"]) && !empty($_POST["height"]) && !empty($_POST["sexe"]) && !empty($_POST["email"]) ){

		$requete = $pdo->prepare("INSERT INTO `mmiusers` (`idUser`, `loginUser`, `passwordUser`, `nomUser`, `prenomUser`, `ageUser`, `weightUser`, `heightUser`, `sexeUser`, `emailUser`) VALUES (NULL, :login, :pwd, :nom, :prenom, ;:age, :weight, :height, :sexe, :email);");
		$requete->bindParam(':login', $_POST['login']);
		$requete->bindParam(':pwd', $_POST['pwd']);
		$requete->bindParam(':nom', $_POST['nom']);
		$requete->bindParam(':prenom', $_POST['prenom']);
		$requete->bindParam(':age', $_POST['age']);
		$requete->bindParam(':weight', $_POST['weight']);
		$requete->bindParam(':height', $_POST['height']);
		$requete->bindParam(':sexe', $_POST['sexe']);
		$requete->bindParam(':email', $_POST['email']);
		$requete->execute();
		$retour["success"]= true;
		$retour["message"]= "User ajoute";
		$retour["resultats"]=array();

}
else{
	$retour["success"]= false;
	$retour["message"]= "Manque d'infos";
}


echo json_encode($retour);
