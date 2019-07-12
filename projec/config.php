<?php

#Create a database connection

$conn = mysqli_connect('localhost','root','','food1');

#Check connection is working

if (!$conn){

    #First handle a situation where an error can occur due to unsuccessful connection
    #mysqli_connect_error(); is a function that stores/contains the error message for unsuccessful connection

    die("Connection failed".mysqli_connect_error());
}

?>