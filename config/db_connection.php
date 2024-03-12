<?php

$hostName = "localhost";
$user = "root";
$password = "";
$dbName = "eParkingSystem";
$conn = mysqli_connect($hostName, $user, $password, $dbName );

if(!$conn){
    die("Nesto nije u redu!");
}

?>