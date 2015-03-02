<?php
//Paramêtre particuliers de la page

$pageNum = 1;
$pageScript = "<script src='../script/liste.js'></script>";


//include infos
include("../inc/globalVar.inc.php");
include("../inc/functions.inc.php");


//Connection BDD
include("../model/dbConnect.inc.php");



//On stocke la requète dans une variable
$db_query = "SELECT * FROM vin ORDER BY id_vin";

//Préparation et exécution de la requête
$st = $db->prepare($db_query);
$st->execute();

$vins = $st->fetchAll(PDO::FETCH_ASSOC);

//Requête pour liste des vins

//vues
include("../view/top.inc.php");

include("../view/liste.inc.php");

include ("../view/bottom.inc.php");
