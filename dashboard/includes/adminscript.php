<?php
    include_once 'database.php';


function getAdmin(){
        global $conn;
        $sql = "SELECT UserId, UserName, UserEmail FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        }else{
            return 0;
        } 
    }