<?php

//Simplifacation de variable
$id = $_POST['id'];

//Connection
include("../inc/globalVar.inc.php");
include('../model/dbConnect.inc.php');

//Récupération de l'ensemble des infos du vin

//On stocke la requète dans une variable
$db_query = "SELECT * FROM vin WHERE id_vin = $id";

//Préparation et exécution de la requête
$st = $db->prepare($db_query);
$st->execute();

//Traitement dans le cas d'une lecture d'un seul enregistrement
$vinInfos = $st->fetch(PDO::FETCH_ASSOC);


//récup Cépage
	$id_cepage = $vinInfos['cepage'];
	$db_query = "SELECT * FROM cepage WHERE idcepage = $id_cepage";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$cepageInfos = $st->fetch(PDO::FETCH_ASSOC);

	$vinInfos['cepage'] = $cepageInfos['nom'];

//récup Viticulteur
	$id_viticulteur = $vinInfos['idvigneron'];
	$db_query = "SELECT * FROM vigneron WHERE idvigneron = $id_viticulteur";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$viticulteurInfos = $st->fetch(PDO::FETCH_ASSOC);

	$vinInfos['viticulteur'] = $viticulteurInfos['nom'];


echo json_encode( $vinInfos);



