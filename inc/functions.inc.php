<?php

function menuGen($listePage, $pageActiveNum){
	$output = "<ul class='nav navbar-nav'>";

	foreach($listePage as $num => $page){

		$fichier = $page['fichier'];
		$nom = $page['nom'];
		$icone = $page['icone'];

		$classText = "";

		if ($num == $pageActiveNum) $classText = " class='active' ";

    	$output .=	"<li $classText ><a href='$fichier'><i class='glyphicon glyphicon-$icone glyphicon-lg'></i> $nom</a></li>";
	}


	$output .="</ul>";

	return $output;

}
