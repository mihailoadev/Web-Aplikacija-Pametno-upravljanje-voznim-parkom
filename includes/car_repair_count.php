<?php
require(__DIR__ . '/../config/db_connection.php');

$broj_vozila_u_kvaru_query = "SELECT COUNT(*) AS total FROM vehicles WHERE tehnical_condition = 'U kvaru'";
$result = mysqli_query($conn, $broj_vozila_u_kvaru_query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $broj_vozila_u_kvaru_total = $row['total'];
    echo $broj_vozila_u_kvaru_total;
} else {
    echo '0'; // Default value if there is an error or no rows
}
?>
