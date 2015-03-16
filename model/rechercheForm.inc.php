<?php

//Connection BDD
include("../model/dbConnect.inc.php");

//Liste des aliments
//On stocke la requète dans une variable
$db_query = "SELECT * FROM aliment ORDER BY id_aliment";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$aliments = $st->fetchAll(PDO::FETCH_ASSOC);


//Liste des descriptions

//On stocke la requète dans une variable
$db_query = "SELECT * FROM description ORDER BY iddescription";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	$st->execute();
	$descriptions = $st->fetchAll(PDO::FETCH_ASSOC);
