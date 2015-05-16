<?php

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