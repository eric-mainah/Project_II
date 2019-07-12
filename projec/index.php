<?php include 'header.php';
include "config.php";
session_start();

if(!isset($_SESSION['email'])){
    header('location:signup.php');
}
?>

    <div class="container-fluid">
    <div class="row">
            <img src="./Images/food1.jpeg" alt="" style="width: 100%; height: 100%;background-size: cover">
    </div>
    </div>

<?php include 'footer.php';?>