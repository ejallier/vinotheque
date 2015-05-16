<?php

//Connection BDD
include("../model/dbConnect.inc.php");

$vinResult = array();

$alimentNom = "";
if($alimentId != "no"){

	//récupération de l'éventuel aliment
	$db_query = "SELECT * FROM aliment WHERE id_aliment = $alimentId";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$aliment = $st->fetch(PDO::FETCH_ASSOC);

	$alimentNom = $aliment['nom'];

	//récup des vins correspondants
	$db_query = "SELECT * FROM vin WHERE idaliment = $alimentId";
		$st = $db->prepare($db_query);
		$st->execute();
		$vinResultsAlim = $st->fetchAll(PDO::FETCH_ASSOC);

	$vinResult = $vinResultsAlim ;

}


$robe = "";
if($descriptionId != "no"){

	//récupération de l'éventuel robe
	$db_query = "SELECT * FROM description WHERE iddescription = $descriptionId";
		//Préparation et exécution de la requête
		$st = $db->prepare($db_query);
		$st->execute();
		$description = $st->fetch(PDO::FETCH_ASSOC);

		$robe = $description['robe'];

	//récup des vins correspondants
	$db_query = "SELECT * FROM vin WHERE iddescription = $descriptionId";
		$st = $db->prepare($db_query);
		$st->execute();
		$vinResultsDesc = $st->fetchAll(PDO::FETCH_ASSOC);

	$vinResult = $vinResultsDesc;
}




if ( $descriptionId != "no" && $alimentId != "no" ){
	$vinResult = array();
	foreach ($vinResultsDesc as $vin1){
		foreach($vinResultsAlim as $vin2){

			if( $vin1['iddescription'] == $vin2['iddescription'] && $vin1['idaliment'] && $vin2['idaliment'] ){
				$vinResult[] = $vin1;
			}

		}
	}
}




//
