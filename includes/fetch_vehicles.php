<?php
require(__DIR__ . '/../config/db_connection.php');

$query = "SELECT * FROM vehicles";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) > 0) {
    foreach($query_run as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['parking_type']; ?></td>
            <td><?php echo $row['parking_number']; ?></td>
            <td><?php echo $row['registration']; ?></td>
            <td><?php echo $row['vehicle_type']; ?></td>
            <td><?php echo $row['registration_date']; ?></td>
            <td><?php echo $row['expiration_date']; ?></td>
            <td><?php echo $row['tehnical_condition']; ?></td>
            <td class="text-center">
            <a href="../includes/modify_data.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> Ažuriraj</a>
            <td class="text-center"><button type="button" class="btn btn-danger btn-sm deletebtn"><i class="fa-solid fa-trash" style="color: #ffffff;"></i> Obriši </button> </td> 
        </tr>
        <?php
    }
} 
else 
{
    ?>
    <tr>
        <td colspan="10">Nema podataka!</td>
    </tr>
    <?php
}
?>
