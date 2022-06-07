<?php

require 'conexion.php';

$user = $_GET['user'];
$query = mysqli_query($link, "SELECT * FROM users WHERE binary user = '$user'");
$result = mysqli_fetch_assoc($query);
$id = $result['id'];

$query2 = mysqli_query($link, "SELECT * FROM scores WHERE users_id = '$id'");
$response = array();
while ($row = mysqli_fetch_assoc($query2)){
    array_push($response,$row);
}
echo json_encode($response);

?>
