<?php
//Paramêtre particuliers de la page
$pageNum = 2;
$pageScript = "";


//include infos
include("../inc/globalVar.inc.php");
include("../inc/functions.inc.php");


//Récupération des POST

if ( !isset($_POST['aliment']) ) 		$_POST['aliment'] = "";
if ( !isset($_POST['description']) ) 	$_POST['description'] = "";
if ( !isset($_POST['rechercher']) ) 	$_POST['rechercher'] = "";

$alimentId = $_POST['aliment'];
$descriptionId = $_POST['description'];
$rechercher = $_POST['rechercher'];






//vues
include("../view/top.inc.php");

switch($rechercher){
	case "":
		include("../model/rechercheForm.inc.php");
		include("../view/rechercher.inc.php");
		break;
	case "rechercher":

		include("../model/resultatForm.inc.php");
		//on récupère $robe et $alimentNom

		$phrase  = "Vous recherchez un vin $robe";

		if ( !empty($alimentNom) )
			$phrase .= " pour accompagner du $alimentNom";
		$phrase .= " :";

		//Génération du résultat
		if ( empty($vinResult) ){
			$output  = "<div class='alert alert-warning' role='alert'>";
				$output .= "Y'en a pas !";
				$output .= "<p><a href='rechercher.php' class='alert-link'>retour</a></p>";
			$output .= "</div>";
		}else{
			$output = "<div class='alert alert-success' role='alert'>";
				$output .= "<ul>";
					foreach($vinResult as $val){
						$output .= "<li>";
							$output .= $val['nom'];
						$output .= "</li>";

					}
				$output .= "</ul>";
				$output .= "<p><a href='rechercher.php' class='alert-link'>retour</a></p>";
			$output .= "</div>";

		}





		include("../view/resultat.inc.php");
}


include ("../view/bottom.inc.php");
