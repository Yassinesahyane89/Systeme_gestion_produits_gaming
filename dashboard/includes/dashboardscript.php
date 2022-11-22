<?php
  include_once 'database.php';


  function totalProduct(){
     global $conn;
    $sql = "SELECT count(*) as total FROM product";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc() ;
    return $row['total'];
  }


  function totalUsers(){
     global $conn;
    $sql = "SELECT count(*) as total FROM users";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc() ;
    return $row['total'];
  }