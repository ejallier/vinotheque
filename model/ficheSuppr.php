<?php

$id = $_GET['id'];

//On stocke la requète dans une variable
$db_query = "DELETE FROM vin WHERE id_vin=$id";

//Préparation et exécution de la requête
$st = $db->prepare($db_query);
$st->execute();