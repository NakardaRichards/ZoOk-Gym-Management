 
<?php

 


include 'memberships.php';
$membershipsObj = new Memberships();

if (isset($_POST['submit'])) {
    $membershipsObj->membership($_POST);
}






?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gym Membership signup</title>
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
    <link rel="stylesheet" href="adminsignup.css">


</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="membership.php" method="POST">
                    <span class="login100-form-title p-b-26">
                        Membership Registration
                    </span>
                    <span>
                        <a href="landingpage.html">
                            <img style="width:130px;position:relative;margin-left:80px;" src="Images\o.png">
                        </a>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter the trainer's first name">
                        <input class="input100" type="text" name="fname">
                        <span class="focus-input100" data-placeholder="First Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter the trainer's last name">
                        <input class="input100" type="text" name="lname">
                        <span class="focus-input100" data-placeholder="Last Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter your age">
                        <input class="input100" type="text" name="age">
                        <span class="focus-input100" data-placeholder="Age"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Enter your Address">
                        <input class="input100" type="address" name="address">
                        <span class="focus-input100" data-placeholder="Address"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter your Date of Birth">
                        <input class="input100" type="date" name="dob">
                        <span class="focus-input100" data-placeholder="Date of Birth"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter your phone number">
                        <input class="input100" type="text" name="phone">
                        <span class="focus-input100" data-placeholder="Phone number"></span>
                    </div>





                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.com">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter Your Gym's name">
                        <input class="input100" type="text" name="gym_name">
                        <span class="focus-input100" data-placeholder="Gym Name"></span>
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
                                Complete membership Registration
                            </button>
                        </div>
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