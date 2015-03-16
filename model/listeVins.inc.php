<?php
//Requête pour liste des vins

//On stocke la requète dans une variable
$db_query = "SELECT * FROM vin ORDER BY id_vin";

//Préparation et exécution de la requête
$st = $db->prepare($db_query);
$st->execute();

$vins = $st->fetchAll(PDO::FETCH_ASSOC);
