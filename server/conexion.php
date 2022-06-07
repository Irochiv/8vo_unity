<?php
global $host, $user, $pass, $db;

$host = "localhost";
$user = "root";
$pass = "mydbroot";
$db = "gamedb";

$link = mysqli_connect($host, $user, $pass, $db) or die ("Conexion fallida");
mysqli_select_db($link, $db) or die ("Base de datos fallida");
?>