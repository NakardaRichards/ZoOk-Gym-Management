<?php
include 'admins.php';





$adminsObj = new Admins();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <title>Master <?php echo $_SESSION['username']; ?></title>
</head>

<body>


    <?php if (isset($_SESSION['username'])) : ?>
        <p>
            <a class="simple-text logo-normal">
                Your Logo
                <div class="logo-image-big">
                    <img src="images/o.png">
                </div>
            </a>
            </div>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
            from <?php echo $_SESSION['gym_name']; ?>

            <?php echo "This session ID is ", $_SESSION['id']; ?>

        </p>
        <p>
            <a href="adminlogin.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>

        </p>

    <?php endif ?>


</body>

</html>