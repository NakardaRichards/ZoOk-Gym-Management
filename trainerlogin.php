<?php
include 'members.php';

include 'trainers.php';
session_id();



$membersObj = new Members();
$trainersObj = new Trainers();


if (isset($_POST['submit'])) {
    $trainersObj->loginData($_POST);
}








?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title> Trainer Login Component</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">



    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <script src="adminlogin.js">
    </script>
    <link rel="stylesheet" href="adminlogin.css">

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="trainerlogin.php" method="POST">
                    <span class="login100-form-title p-b-26">
                        Welcome back to ZoOk
                    </span>
                    <span>
                    <a href="LandingPage.html">
                            <img style="width:130px;position:relative;margin-left:80px;" src="Images\o.png">
                        </a>
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.com">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button name="submit" type="submit" value="Submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="butn1" onclick="handleClick()">ADMIN LOGIN</button>
                    </div>


                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2" href="signup.php">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>


    </div>



    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



    <script src="js/main.js"></script>

</body>



</html>