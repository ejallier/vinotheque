<?php
$pageNum = 1;
$pageScript = "";
$admin = 1;

if(isset($_GET['id'])) 	$action='modifier';
if(isset($_POST['id'])) $action='enregistrer';

//include infos
include("../inc/globalVarBack.inc.php");
include("../inc/functions.inc.php");

//Connection BDD
include("../model/dbConnect.inc.php");

if( $action =='modifier' ) 		include '../model/ficheModif.php';
if( $action =='enregistrer' ) 	include '../model/ficheEnreg.php';

//Vues
include ('../view/top.inc.php');

if( $action =='modifier' ) 		include '../view/modifAdmin.inc.php';
if( $action =='enregistrer' ) 	{
	if ($success == 'yes') {
		include '../view/enregAdmin.inc.php';
	}
	else {
		include '../view/modifAdmin.inc.php';
	}
}

include ('../view/bottom.inc.php');