<?php
require_once(__DIR__ . '/../config/db_connection.php');


$broj_korisnika_query = "SELECT COUNT(*) AS total FROM users";
$result = mysqli_query($conn, $broj_korisnika_query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $broj_korisnika_total = $row['total'];
    echo $broj_korisnika_total;
} else {
    echo '0'; // Default value if there is an error or no rows
}
?>
