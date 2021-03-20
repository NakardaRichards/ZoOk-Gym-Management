<?php
include 'users.php';

$usersObj = new Users();
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);




// $session = array();
foreach ($_SESSION as $k => $v) {
    $session[$k] = $v;
}
session_commit();

// create new session and copy variables
session_id("new session id");
session_start();
foreach ($session as $k => $v) {
    $_SESSION[$k] = $v;
}
session_name();

session_status();








$_SESSION['logged_in'] = time();





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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





    <!-- <?php
            echo 'Current script owner: ' . get_current_user();
            ?> -->

    <!-- <?php
            $username = getenv('USERNAME') ?: getenv('USER');
            echo $username;
            ?> -->



    <p>
        Welcome
        <strong>
            <?php


            echo $_SESSION['username'];
            ?>
        </strong>



</body>

</html>