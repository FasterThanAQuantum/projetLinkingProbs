<?php
include 'header.php';

	$cur_date=date("Y-m-d");
	$requete= $pdo->prepare("SELECT `journal`.`addTime`, `mmi`.`nom_aliment`, `mmi`.`ratio_glucide`,`mmi`.`ratio_lipide` FROM `journal` JOIN `mmi` ON `journal`.`idAlimentJournal`= `mmi`.`id_aliment` WHERE `journal`.`idUserJournal`=1 AND `journal`.`addTime`='$cur_date '");
	$requete->execute();


$resultats=$requete->fetchAll();

$retour["success"]= true;
$retour["message"]= "Voici les aliments du journal";
//$retour["results"]["nb_aliments"]= count($resultats);
$retour["results"]["aliments"]=$resultats;

echo json_encode($retour);
