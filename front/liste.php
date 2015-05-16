<?php
//Paramêtre particuliers de la page

$pageNum = 1;
$pageScript = "<script src='../script/liste.js'></script>";


//include infos
include("../inc/globalVar.inc.php");
include("../inc/functions.inc.php");


//Connection BDD
include("../model/dbConnect.inc.php");

include '../model/listeVins.inc.php';



//vues
include("../view/top.inc.php");

include("../view/liste.inc.php");

include ("../view/bottom.inc.php");
