<?php
if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat_password'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if(empty($fullname) OR empty ($email) OR empty($password) OR empty($passwordRepeat)){
        array_push($errors, "Popunite sva polja!");
    }
    // Add other validation checks as needed

    require(__DIR__ . '/../config/db_connection.php');

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount > 0){
        array_push($errors, "Email je zauzet! Neuspesna registracija!");
    }

    if(count($errors)>0){
        foreach($errors as $error){
            echo "<div class = 'alert alert-danger'>$error</div>";
        }
    }
    else{
        $sql = "INSERT INTO users(full_name, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $preprateStmt = mysqli_stmt_prepare($stmt, $sql);
        if($preprateStmt){
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class = 'alert alert-success'>Uspesno ste registrovani!</div>";
        }
        else{
            die("Nesto nije u redu!");
        }
    }
}
?>
