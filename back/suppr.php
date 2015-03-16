<?php
$pageNum = 2;
$pageScript = "";
$admin = 1;



//include infos
include("../inc/globalVarBack.inc.php");
include("../inc/functions.inc.php");

//Connection BDD
include("../model/dbConnect.inc.php");
include("../model/ficheSuppr.php");




//Vues
include ('../view/top.inc.php');

include '../view/supprAdmin.inc.php';


include ('../view/bottom.inc.php');
