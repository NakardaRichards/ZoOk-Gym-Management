<?php
include 'users.php';





$usersObj = new Users();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master <?php echo $_SESSION['username']; ?></title>
</head>

<body>


    <?php if (isset($_SESSION['username'])) : ?>
        <p>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
        </p>
        <p>
            <a href="login.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>

        </p>

    <?php endif ?>


</body>

</html>