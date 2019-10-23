<?php
include 'db.php';
include "clases/dbjson.php";
include "clases/dbmysql.php";
include "clases/validador.php";
include "clases/auth.php";
include "clases/usuario.php";

$auth = new Auth;
// var_dump($auth);

$file = "db.json";
$json = new DbJson($file);
?>
