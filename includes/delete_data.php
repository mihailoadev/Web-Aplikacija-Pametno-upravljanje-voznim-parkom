<?php
require(__DIR__ . '/../config/db_connection.php');;

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM vehicles WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {        
        header("Location: ../pages/dashboard.php#table");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>