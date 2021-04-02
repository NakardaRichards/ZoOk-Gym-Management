<?php



include 'admins.php';

$adminsObj = new Admins();
include 'members.php';


$membersObj = new Members();


if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $editdata = $adminsObj->displayRecordById($editId);
}



if (isset($_POST['update'])) {
    $adminsObj->updateData($_POST);
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Edit</title>
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
                <form class="login100-form validate-form" action="adminedit.php" method="POST">
                    <span class="login100-form-title p-b-26">
                        Update Your Gym's Information
                    </span>
                    <span>
                        <a href="landingpage.html">
                            <img style="width:130px;position:relative;margin-left:80px;" src="Images\o.png">
                        </a>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter your first name">
                        <input class="input100" type="text" for="fname" name="ufname">
                        <span class="focus-input100" data-placeholder="First Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter last name">
                        <input class="input100" type="text" for="lname" name="ulname">
                        <span class="focus-input100" data-placeholder="Last Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Your gym's location">
                        <input class="input100" type="text" for="location" name="ulocation">
                        <span class="focus-input100" data-placeholder="Gym's Location"></span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate="Enter Your gym's Available Time Slots">
                        <input class="input100" type="text" for="time_slot" name="utime_slot">
                        <span class="focus-input100" data-placeholder="Gym's Available Time Slots"></span>
                    </div>




                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.com">
                        <input class="input100" type="text" for="email" name="uemail">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter Your Gym's name">
                        <input class="input100" type="text" for="gym_name" name="ugym_name">
                        <span class="focus-input100" data-placeholder="Gym Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Monthly Fee Cost">
                        <input class="input100" type="text" for="cost_per_month" name="ucost_per_month">
                        <span class="focus-input100" data-placeholder="Monthly Membership Fee"></span>
                    </div>




                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                            <button name="update" type="submit" value="Update" class="login100-form-btn">
                                Update Info
                            </button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



    <script src="js/main.js"></script>

</body>

</html>