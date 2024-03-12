<?php
require(__DIR__ . '/../config/db_connection.php');

if(isset($_POST['insertdata'])){
    $parking_type = $_POST['parking_type'];
    $parking_number = $_POST['parking_number'];
    $registration = $_POST['registration'];
    $vehicle_type = $_POST['vehicle_type'];
    $registration_date = $_POST['registration_date'];
    $expiration_date = $_POST['expiration_date'];
    $tehnical_condition = $_POST['tehnical_condition']; // Ispravljeno ime ključa

    $query = "INSERT INTO vehicles(parking_type, parking_number, registration, vehicle_type, registration_date, expiration_date, tehnical_condition) VALUES ('$parking_type', '$parking_number', '$registration','$vehicle_type', '$registration_date', '$expiration_date', '$tehnical_condition')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
      echo "<script>
      $('#vehicleForm').on('submit', function() {
        $(this).each(function() {
             this.reset();
        });
    });
    </script>";

    header("Location: ../pages/dashboard.php");
    }
    else{
      echo "<div class = 'alert alert-danger'>Doslo je do greske!</div>";
    }
}
?>