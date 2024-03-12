<?php

require(__DIR__ . '/../config/db_connection.php');

if (isset($_POST["editdata"])) {
    $parking_type = mysqli_real_escape_string($conn, $_POST["parking_type"]);
    $parking_number = mysqli_real_escape_string($conn, $_POST["parking_number"]);
    $registration = mysqli_real_escape_string($conn, $_POST["registration"]);
    $vehicle_type = mysqli_real_escape_string($conn, $_POST["vehicle_type"]);
    $registration_date = mysqli_real_escape_string($conn, $_POST["registration_date"]);
    $expiration_date = mysqli_real_escape_string($conn, $_POST["expiration_date"]);
    $tehnical_condition = mysqli_real_escape_string($conn, $_POST["tehnical_condition"]);
    
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    
    $sqlUpdate = "UPDATE vehicles SET 
        parking_type = '$parking_type',
        parking_number = '$parking_number',
        registration = '$registration',
        vehicle_type = '$vehicle_type',
        registration_date = '$registration_date',
        expiration_date = '$expiration_date',
        tehnical_condition = '$tehnical_condition'
        WHERE id='$id'";

    if(mysqli_query($conn,$sqlUpdate)){
        
        header("Location: ../pages/dashboard.php#table");
    }else{
        die("Something went wrong");
    }
}

?>