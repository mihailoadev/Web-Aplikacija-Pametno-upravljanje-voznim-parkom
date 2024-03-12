<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    require(__DIR__ . '/../config/db_connection.php');


    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($user !== null){
        $user_full_name = $user['full_name'];
        if(password_verify($pass, $user['password'])){
            session_start();
            $_SESSION['user'] = "yes";
            $_SESSION['full_name'] = $user_full_name;
            header("Location: ../pages/dashboard.php");
            die();
        }
        else{
            echo "<div class='alert alert-danger'>Password nije ispravan!</div>";
        }
    }
    else{
        echo "<div class='alert alert-danger'>Email ne postoji!</div>";
    }
}
?>
