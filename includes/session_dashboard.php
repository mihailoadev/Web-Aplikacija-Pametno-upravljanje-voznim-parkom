<?php
require(__DIR__ . '/../config/db_connection.php');
session_start();
if(!isset($_SESSION["user"])){
    header("Location: ../auth/user_login.php");   
}
?>