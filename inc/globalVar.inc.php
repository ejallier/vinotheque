<?php
//Params de BDD
define ("DB_USER", "root");
define ("DB_PWD", "fall2014");
// define ("DB_SERVER", "192.168.1.16");
define ("DB_SERVER", "10.0.1.17");
define ("DB_NAME", "vin");




//Liste des pages

	$listePageFront = array(
		array(
			"fichier" => "index.php",
			"nom" => "Accueil",
			"icone" => "home"
		),

		array(
			"fichier" => "liste.php",
			"nom" => "Liste des vins",
			"icone" => "book"
		),

		array(
			"fichier" => "rechercher.php",
			"nom" => "Chercher le bon vin",
			"icone" => "search"
		),

		array(
			"fichier" => "../back/index.php",
			"nom" => "Administration",
			"icone" => "cog"
		)
	);

