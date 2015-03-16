<?php
$pageNum = 2;
$pageScript = "";
$admin = 1;

$action='';
if(isset($_POST['nom'])) $action='ajouter';

//include infos
include("../inc/globalVarBack.inc.php");
include("../inc/functions.inc.php");

//Connection BDD
include("../model/dbConnect.inc.php");
include("../model/ficheAjout.php");

if( $action == 'ajouter' ) 	{
	include '../model/ficheAjouter.php';
}


//Vues
include ('../view/top.inc.php');

if($action == 'ajouter'){
	include '../view/ajoutAdmin.inc.php';
}else{
	include '../view/ajoutFormAdmin.inc.php';
}

include ('../view/bottom.inc.php');
