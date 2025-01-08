<?php
session_start();
if(!isset($_POST['email'])) {
    header('Location:../index.php');
}

include_once('dbdetailes.php');

$e = $_POST['email'];
$p = $_POST['pass'];



$con = new mysqli($server, $username, $password, $dbname);

$sql="SELECT * FROM det WHERE Email='$e'AND Password='$p'";

$result=$con->query($sql);

if($result->num_rows > 0) {
    $con->close();
    $_SESSION['user']=$e;
    header('Location:../home.php') ;
}else{
    header("Location:../index.php?retry");
}

$con->close();

?>