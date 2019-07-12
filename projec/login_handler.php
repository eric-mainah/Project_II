<?php include 'config.php';

session_start();

$sql = "SELECT  `email`, `password` FROM `project`";

if(mysqli_query($conn,$sql)){
    header('location:index.php');
    $_SESSION['email']=$email;
}else{
    header('location:signup.php');
}
?>