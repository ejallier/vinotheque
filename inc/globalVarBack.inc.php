<?php
//Params de BDD
define ("DB_USER", "root");
define ("DB_PWD", "fall2014");
// define ("DB_SERVER", "192.168.1.19");
define ("DB_SERVER", "10.0.1.17");
define ("DB_NAME", "vin");




//Liste des pages

	$listePageBack = array(
		array(
			"fichier" => "../front/index.php",
			"nom" => "Voir le site",
			"icone" => "home"
		),

		array(
			"fichier" => "../back/index.php",
			"nom" => "Liste des vins",
			"icone" => "list"
		),

		array(
			"fichier" => "../back/ajout.php",
			"nom" => "Ajouter un vin",
			"icone" => "plus"
		)
	);

