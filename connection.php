<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "database1";

$connect = mysqli_connect($server, $username, $password, $database, port: 3306);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>

