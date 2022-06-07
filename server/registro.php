<?php

require 'conexion.php';

$user = $_GET['user'];
$password = $_GET['password'];
$email = $_GET['email'];

$registro = mysqli_query($link, "INSERT INTO users (user, password, email) VALUES ('$user', '$password', '$email')");
echo "102";

?>
