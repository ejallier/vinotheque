<?php
$pageNum = 1;
$pageScript = "<script src='../script/listeAdmin.js'></script>";
$admin = 1;

//include infos
include("../inc/globalVarBack.inc.php");
include("../inc/functions.inc.php");

//Connection BDD
include("../model/dbConnect.inc.php");
include '../model/listeVins.inc.php';


//Vues
include ('../view/top.inc.php');

include '../view/listeAdmin.inc.php';

include ('../view/bottom.inc.php');
