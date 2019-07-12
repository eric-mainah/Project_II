<?php

session_start();

$firstname=$lastname=$email=$password_1='';

include 'config.php';

if (isset($_POST['signup'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];

    if(empty($firstname)){
        header('location:signup.php?f_error');
        exit();
    }else{
        $firstname = $firstname;
    }

    if(empty($lastname)){
        header('location:signup.php?l_error');
        exit();
    }else{
        $lastname = $lastname;
    }

    if(empty($email)){
        header('location:signup.php?e_error');
        exit();
    }else{
        $email = $email;
    }

    if(empty($password_1)){
        header('location:signup.php?p1_error');
        exit();
    }else{
        $password_1 = md5($password_1);
    }

    $sql = "SELECT * FROM `project` WHERE firstname='$firstname' OR email='$email' LIMIT 1";
    $results = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($results);
    if($user){
        header('location:signup.php?user_error');
        exit();
    }
    $sql = "INSERT INTO `project`(`id`, `firstname`, `lastname`, `email`, `password`) 
            VALUES (null,'$firstname','$lastname','$email','$password_1')";
    if (mysqli_query($conn, $sql)) {
        header("location:index.php");
        $_SESSION['email'] = $email;
    } else {
        echo "Failed to add user to the db";
    }
}

