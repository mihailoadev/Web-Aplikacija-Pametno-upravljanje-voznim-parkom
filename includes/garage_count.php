<?php
require(__DIR__ . '/../config/db_connection.php');

$tip_parkinga = "Garaža"; // Postavite željeni tip parkinga
$broj_garaza_vozila = "SELECT COUNT(*) as total FROM vehicles WHERE parking_type = '$tip_parkinga'";
$broj_garaza_query = mysqli_query($conn, $broj_garaza_vozila);

if ($broj_garaza_result = mysqli_fetch_assoc($broj_garaza_query)) {
    echo $broj_garaza_result['total'];
} else {
    echo '0'; // Default value if there are no rows
}
?>
