<?php

include_once('dbdetailes.php');

$e = $_POST['email'];
$p = $_POST['pass'];

$con = new mysqli($server, $username, $password, $dbname);

// Check if email already exists
$email_check_sql = "SELECT * FROM det WHERE Email = '$e'";
$email_check_result = $con->query($email_check_sql);

if ($email_check_result->num_rows > 0) {
    // Email already exists, redirect to signup with error
    header('Location:../signup.php?fail=email_exists');
} else {
    // Insert new user if email doesn't exist
    $sql = "INSERT INTO det (Email, Password) VALUES ('$e', '$p')";
    $result = $con->query($sql);

    if ($result == TRUE) {
        header('Location:../signup.php?ok');
    } else {
        header('Location:../signup.php?fail');
    }
}

$con->close();
?>
