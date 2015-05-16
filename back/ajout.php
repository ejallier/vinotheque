<?php
$pageNum = 2;
$pageScript = "";
$admin = 1;

$action = '';
$requeteAjouter = true;

if (isset($_POST['nom'])) $action = 'ajouter';

//include infos
include("../inc/globalVarBack.inc.php");
include("../inc/functions.inc.php");

//Connection BDD
include("../model/dbConnect.inc.php");
include("../model/ficheAjout.php");

if ($action == 'ajouter') {
    try {
        include '../model/ficheAjouter.php';
    } catch (PDOException $e) {
        $requeteAjouter = false;
    }


}


//Vues
include('../view/top.inc.php');

if ($action == 'ajouter') {
    if ($requeteAjouter === true) {
        include '../view/ajoutAdminSuccess.inc.php';
    } else {
        include '../view/ajoutAdminError.inc.php';
    }
} else {
    include '../view/ajoutFormAdmin.inc.php';
}

include('../view/bottom.inc.php');
