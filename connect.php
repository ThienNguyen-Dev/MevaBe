<?php
    $host ="localhost";
    $username = "root";
    $password = "";
    $database = "webbe";
    $conn = mysqli_connect($host,$username,$password,$database);
    if (mysqli_connect_errno()){
        echo "Connection Fail: ".mysqli_connect_errno();exit;
    }
?>