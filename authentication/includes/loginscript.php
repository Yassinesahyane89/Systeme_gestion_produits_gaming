<?php
session_start();

require_once "database.php";

if(isset($_POST["login"])) loginUser();

    function loginUser() {
        global $conn;

        $email = $_POST["email"];
        $passwod = $_POST["password"];

        $sql = "SELECT * FROM users WHERE UserEmail = '$email';"; 
        $resultData = $conn->query($sql);

        // $resultData = mysqli_stmt_get_result($stmt);

        if($row = $resultData->fetch_assoc()){
            $pwdHashed = $row["UserPassword"];

            $checkPwd = password_verify($passwod, $pwdHashed);

            if ($checkPwd === false) {
                $_SESSION["email"] = $email;
                $_SESSION["passwod"] = $passwod;
                header("location: ../login.php?error=wronglogin");
                exit();
            }else if($checkPwd === true){
                $_SESSION["good"] = "goode";
                header("location: ../../dashboard/dashboard.php ");
                exit();
            }
        }else{
            $_SESSION["email"] = $email;
            $_SESSION["passwod"] = $passwod;

            header("location: ../login.php");
            exit();
        }

       $conn->close();
    }