<?php

//Accès par PDO

$source = "mysql:host=".DB_SERVER.";dbname=".DB_NAME;

$db = new PDO($source , DB_USER , DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$db->exec("SET CHARACTER SET utf8");
