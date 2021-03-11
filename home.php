<?php


session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);

session_id();
include 'users.php';

$usersObj = new Users();


$_SESSION['favcolor'] = 'green';
$_SESSION['username']   = 'username';
$_SESSION['time']     = time();



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


    echo (session_id());
    echo "<br></br>";
    echo date('Y m d H:i:s', $_SESSION['time']);
    echo "<br></br>";
    echo "Welcome ", $_SESSION['username'];

    ?>






</body>

</html>