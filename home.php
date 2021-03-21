<?php

include 'users.php';

$usersObj = new Users();



session_commit();


session_name();

session_status();








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


    <?php



    echo "Session ID: ", (session_id());
    echo "<br></br>";



    echo  date('Y m d H:i:s', $_SESSION['logged_in']);

    echo "<br></br>";


    echo "<br></br>";

    echo "Session name: ", session_name();
    echo "<br></br>";
    echo "Session Status: ", session_status();
    echo "<br></br>";





    echo "<br></br>";

    ?>




    <!--  NOT IMPORTANT -->
    <?php
    echo 'Current script owner: ' . get_current_user();
    ?>

    <!-- <?php
            $username = getenv('USERNAME') ?: getenv('USER');
            echo $username;
            ?> -->


    <!--  NOT IMPORTANT -->




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