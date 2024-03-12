<?php
require(__DIR__ . '/../config/db_connection.php');

$tip_vozila = "Automobil"; // Postavite željeni tip vozila
$broj_auto_query = "SELECT COUNT(*) AS total FROM vehicles WHERE vehicle_type = '$tip_vozila'";
$result = mysqli_query($conn, $broj_auto_query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $broj_auto_total = $row['total'];
    echo $broj_auto_total;
} else {
    echo '0'; // Default value if there is an error or no rows
}
?>
