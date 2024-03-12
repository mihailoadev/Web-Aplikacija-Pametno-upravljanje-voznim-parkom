<?php
require(__DIR__ . '/../config/db_connection.php');

$tip_parkinga = "Parking"; // Postavite željeni tip parkinga
$broj_otvoren_parking_vozila = "SELECT COUNT(*) as total FROM vehicles WHERE parking_type = '$tip_parkinga'";
$broj_otvoren_parking_query = mysqli_query($conn, $broj_otvoren_parking_vozila);

if ($broj_otvoren_parking_result = mysqli_fetch_assoc($broj_otvoren_parking_query)) {
    echo $broj_otvoren_parking_result['total'];
} else {
    echo '0'; // Default value if there are no rows
}
?>
