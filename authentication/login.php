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

                <form action="login.php" method="POST" id="form-task">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" onInput="check(this)" required>
                        <i class="fa-solid fa-lock"></i>
                        <i class="fa-solid fa-eye showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <button type="submit" name="login" id="login">Login</button>
                    </div>
                </form>

                <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Signup Now</a>
                        </span>
                </div>
            </div>
    </div>
<script src="../assets/js/loginscript.js"></script>
</body>
</html>

