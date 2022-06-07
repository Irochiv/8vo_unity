<?php
    require 'conexion.php';
    $user = $_GET['user'];
    $password = $_GET['password'];

    $login = mysqli_query($link, "SELECT * FROM users WHERE binary user = '$user' AND  binary password = '$password'");
    if(mysqli_num_rows($login) > 0){
        echo "101";
    }else{
        echo "401";
    }
?>
