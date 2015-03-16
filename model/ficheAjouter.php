<?php


$nom = $_POST['nom'];
$cepage = $_POST['cepage'];
$region = $_POST['region'];
$vigneron = $_POST['vigneron'];
$aliment = $_POST['aliment'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];

//On stocke la requète dans une variable
	//Requète d'update
	$db_query = "INSERT INTO vin
					(
						nom,
						cepage,
						region,
						idvigneron,

						idaliment,
						prix,
						iddescription,
						stock
					)
					VALUE(
						:p1,
						:p2,
						:p3,
						:p4,
						:p5,
						:p6,
						:p7,
						:p8

					)";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	
	$st->bindParam(':p1', $nom);
	$st->bindParam(':p2', $cepage);
	$st->bindParam(':p3', $region);
	$st->bindParam(':p4', $vigneron);
	$st->bindParam(':p5', $aliment);
	$st->bindParam(':p6', $prix);
	$st->bindParam(':p7', $description);
	$st->bindParam(':p8', $stock);

	
	$st->execute();