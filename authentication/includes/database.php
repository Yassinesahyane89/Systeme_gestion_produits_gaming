<?php
//CONNECT TO MYSQL DATABASE USING MYSQLI
$conn = mysqli_connect("localhost", "root", "","Login");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

?>