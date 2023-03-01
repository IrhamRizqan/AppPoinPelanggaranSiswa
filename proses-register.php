<?php
include "libs/database.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($db, "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");


if($query){
    header("location: login.php?messageSuccess= Account Added to server!");
} else{
    header("location: register.php?messageError= Error? Check the username, email and password!");
}
?>