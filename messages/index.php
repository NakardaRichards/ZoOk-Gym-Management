<?php



include '../memberships.php';


$membershipsObj = new Memberships();


if (isset($_POST['send'])) {
	$membershipsObj->message($_POST);
}


if (isset($_POST["logout"])) {
	session_destroy();
	header("Location:../LandingPage.html");
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Message Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">


	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>


	<div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="index.php" method="POST">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="userName" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
					<input class="input100" type="text" name="userEmail" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter your correct gym name">
					<input class="input100" type="text" name="gym_name" placeholder="Gym Name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Please enter message subject">
					<input class="input100" type="text" name="subject" placeholder="Subject">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button name="send" type="submit" value="Submit" class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>

					<form role="form" method="post">
						<div class="pull-right-container">

							<button type="submit" value="logout" class="contact100-form-btn" name="logout">
								Logout
							</button>
						</div>
					</form>



					<br>

				</div>

				<div>

				</div>
			</form>

		</div>
	</div>







</body>

</html>