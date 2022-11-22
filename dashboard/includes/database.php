<?php

$serverName = "localhost";
$DatabaseUserName = "root";
$DatabasePassword = "";
$DatabaseName = "Login";

$conn = mysqli_connect($serverName, $DatabaseUserName, $DatabasePassword,$DatabaseName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

 