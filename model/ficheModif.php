<?php

//Simplification de variable
$id = $_GET['id'];



//Récupération de l'ensemble des infos du vin

//On stocke la requète dans une variable
$db_query = "SELECT * FROM vin WHERE id_vin = $id";

//Préparation et exécution de la requête
$st = $db->prepare($db_query);
$st->execute();

//Traitement dans le cas d'une lecture d'un seul enregistrement
$vinInfos = $st->fetch(PDO::FETCH_ASSOC);

//récup Tous Cépages
	$db_query = "SELECT * FROM cepage ORDER BY idcepage";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$cepageListe = $st->fetchAll(PDO::FETCH_ASSOC);



//récup Tous Viticulteurs
	$db_query = "SELECT * FROM vigneron ORDER BY idvigneron";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$vigneronListe = $st->fetchAll(PDO::FETCH_ASSOC);


//récup Tous Aliments
	$db_query = "SELECT * FROM aliment ORDER BY id_aliment";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$alimentListe = $st->fetchAll(PDO::FETCH_ASSOC);

//récup Tous Descriptions
	$db_query = "SELECT * FROM description ORDER BY iddescription";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$descriptionListe = $st->fetchAll(PDO::FETCH_ASSOC);







