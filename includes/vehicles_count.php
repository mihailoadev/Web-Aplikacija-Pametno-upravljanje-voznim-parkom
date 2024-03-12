<?php
require(__DIR__ . '/../config/db_connection.php');


$broj_vozila_query = "SELECT COUNT(*) AS total FROM vehicles";
$result = mysqli_query($conn, $broj_vozila_query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $broj_vozila_total = $row['total'];
    echo $broj_vozila_total;
} else {
    echo '0'; // Default value if there is an error or no rows
}
?>
