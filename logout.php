<?php 
include "libs/database.php";
session_start();
session_destroy();
header("location: login.php?messageSuccess=Logged Out! Silahkan Login Kembali")
?>