<?php

//Simplification de variable
$success = 'yes';

$id = $_POST['id'];
$nom = $_POST['nom'];
$cepage = $_POST['cepage'];
$region = $_POST['region'];
$vigneron = $_POST['vigneron'];
//$aliment = $_POST['aliment'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$stock = $_POST['stock'];

//On stocke la requète dans une variable
	//Requète d'update
	$db_query = "UPDATE vin
					SET
						nom=:p2,
						cepage=:p3,
						region=:p4,
						idvigneron=:p5,
						iddescription=:p7,
						prix=:p8,
						stock=:p9
					WHERE
						id_vin=:p1";

	//Préparation et exécution de la requête
	$st = $db->prepare($db_query);
	

	$st->bindParam(':p1', $id);
	$st->bindParam(':p2', $nom);
	$st->bindParam(':p3', $cepage);
	$st->bindParam(':p4', $region);
	$st->bindParam(':p5', $vigneron);
	$st->bindParam(':p7', $description);
	$st->bindParam(':p8', $prix);
	$st->bindParam(':p9', $stock);
	
	$st->execute();