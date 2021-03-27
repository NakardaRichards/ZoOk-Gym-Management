<?php

include 'members.php';

$membersObj = new Members();


$_SESSION['logged_in'] = time();





?>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $_SESSION['username'];
            echo "'s" ?> Dashboard</title>
</head>

<body>




    <?php if (isset($_SESSION['username'])) : ?>
        <p>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
        </p>
        <?php echo "This session ID is ", $_SESSION['id']; ?>
        <p>
            <a href="login.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>

        </p>

    <?php endif ?>





</body>

</html>