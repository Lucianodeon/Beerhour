<?php
include 'clases/db.php';
include "clases/dbjson.php";
include "clases/dbmysql.php";
include "clases/validador.php";
include "clases/auth.php";
include "clases/usuario.php";

$auth = new Auth;
// var_dump($auth);

$file = "db.json";
$db = new DbJson($file);
?>
