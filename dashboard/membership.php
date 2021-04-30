<!--

<?php //include_once('header.php'); ?>
<?php //include_once('menu.php'); ?>
<?php //include_once('../memberships.php'); 
/*$membershipsObj = new Memberships();

if (isset($_POST['submit'])) {
    $membershipsObj->membership($_POST);
}
if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: ../LandingPage.html");
    exit;
}
*/

?>


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




                <?php //include_once('footer.php'); ?>

                -->