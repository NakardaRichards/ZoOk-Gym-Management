<?php


session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);

session_id();
$_SESSION['id'] = 1;
include 'users.php';

$usersObj = new Users();



if (isset($_POST['submit'])) {
    $usersObj->displayUsername($_POST);
}







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


    echo "Session ID ", (session_id());
    echo "<br></br>";



    echo  date('Y m d H:i:s', $_SESSION['logged_in']);

    echo "<br></br>";
    echo "Welcome", $email;


    ?>






</body>

</html>