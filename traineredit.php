<?php





include 'trainers.php';



$trainersObj = new Trainers();

if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $trainer = $trainersObj->displayTrainerById($editId);
}



if (isset($_POST['update'])) {
    $trainersObj->updateTrainer($_POST);
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trainer Edit</title>
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
                <form class="login100-form validate-form" action="traineredit.php" method="POST">
                    <span class="login100-form-title p-b-26">
                        Update Your Info.
                    </span>
                    <span>
                        <a href="landingpage.html">
                            <img style="width:130px;position:relative;margin-left:80px;" src="Images\o.png">
                        </a>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter trainer's first name">
                        <input class="input100" type="text" for="fname" name="ufname">
                        <span class="focus-input100" data-placeholder="Trainer's First Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter trainer's last name">
                        <input class="input100" type="text" for="lname" name="ulname">
                        <span class="focus-input100" data-placeholder="Trainer's Last Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Your trainer's age">
                        <input class="input100" type="text" for="age" name="uage">
                        <span class="focus-input100" data-placeholder="Trainer's Age"></span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate="Enter Your trainer's phone number">
                        <input class="input100" type="text" for="phone" name="uphone">
                        <span class="focus-input100" data-placeholder="Trainer's Phone number"></span>
                    </div>




                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.com">
                        <input class="input100" type="text" for="email" name="uemail">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Hourly fee">
                        <input class="input100" type="text" for="hourly_fee" name="uhourly_fee">
                        <span class="focus-input100" data-placeholder="Hourly Fee"></span>
                    </div>

                    <!-- <div class="wrap-input100 validate-input" data-validate="Enter Your Gym's name">
                        <input class="input100" type="text" for="gym_name" name="ugym_name">
                        <span class="focus-input100" data-placeholder="Gym Name"></span>
                    </div> -->

                    <div class="wrap-input100 validate-input" data-validate="Enter Your trainer's password">
                        <input class="input100" type="text" for="pass" name="upass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>





                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <input type="hidden" name="id" value="<?php echo $trainer['id']; ?>">
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