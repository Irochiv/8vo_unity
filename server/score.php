<?php

require 'conexion.php';

$user = $_GET['user'];
$score = $_GET['score'];
$query = mysqli_query($link, "SELECT * FROM users WHERE binary user = '$user'");
$result = mysqli_fetch_assoc($query);
$id = $result['id'];
$registro = mysqli_query($link, "INSERT INTO scores (score, users_id) VALUES ('$score', '$id')");
echo "102";

?>
