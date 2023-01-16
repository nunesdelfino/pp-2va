<?php

$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "pratica";

$connect = mysqli_connect($servername,$username,$password,$databaseName);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 
echo "Connected successfully";

?>