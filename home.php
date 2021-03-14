<?php
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);
$session = array();
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

include 'users.php';

session_status();

$_SESSION['greetings'] = "Welcome";



$usersObj = new Users();



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

    echo $_SESSION['greetings'], " ", $_SESSION['logged_in_user_name'];
    // echo $_SESSION['username'];
    echo "<br></br>";

    echo "Session name: ", session_name();
    echo "<br></br>";
    echo "Session Status: ", session_status();
    echo "<br></br>";

    $_SESSION['logged_in_user_id'] = '1';
    $_SESSION['logged_in_user_name'] = 'Nakarda';

    // access session variables
    echo $_SESSION['logged_in_user_id'];
    echo "<br></br>";
    // echo $_SESSION['logged_in_user_name'];




    ?>




    <?php


    $usersObj->displayUsername($_POST);
    
    ?>

</body>

</html>