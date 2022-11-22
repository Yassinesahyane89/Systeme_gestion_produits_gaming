<?php
   session_start();

   if(isset($_SESSION["email"])){
      $email = $_SESSION["email"];
      $password =  $_SESSION["passwod"];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="../assets/css/all.min.css">

    <!-- ===== Style CSS ===== -->
    <link rel="stylesheet" href="../assets/css/loginstyle.css">

    <title>Login & Registration Form</title>
</head>
<body>
    <div class="container">
            <div class="form login">
                <span class="title">Log In</span>

                 <?php if(isset($_SESSION["email"])){ ?>
                        <div class="validation-input" style="display: flex;">
                            <div>
                                <i class="fa-solid fa-circle-exclamation"></i>
                            </div>
                            <div class="message-content">
                                <h4>Nous n'avons pas pu vous connecter</h4>
                                <p>l'adresse courriel ou le mot de passe que vous avez saisis sont incorrects. Veuillez réessayer.</p>
                            </div>
                        </div>
                <?php }session_destroy();?>

                <div class="validation-input">
                    <div>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div>
                    <div class="message-content">
                        <h4>Nous n'avons pas pu vous connecter</h4>
                        <p>Veuillez remplir les champs ci-dessous.</p>
                    </div>
                </div>

                <form action="includes/loginscript.php" method="POST" id="form-task">
                    <div class="input-field">
                        <input type="email" name="email" class="emailLogin" placeholder="Enter your email" oninput="checkEmail()">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="Error errorEmail">
                        <P>Entrer a valid email address</P>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" class="passwordLogin" placeholder="Enter your password" onInput="check(this)" oninput="checkPassword()">
                        <i class="fa-solid fa-lock"></i>
                        <i class="fa-solid fa-eye showHidePw"></i>
                    </div>

                    <div class="Error errorpassword">
                        <P>Entrer a password</P>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <button type="submit" name="login" id="login" onclick="valide()">Login</button>
                    </div>
                </form>

                <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Signup Now</a>
                        </span>
                </div>
            </div>
    </div>
<script src="../assets/javascript/loginscript.js"></script>
</body>
</html>

