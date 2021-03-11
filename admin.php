<?php


session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);

session_create_id();
include 'users.php';

$usersObj = new Users();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Component</title>
</head>

<body>

    <h1>I am Nakarda</h1>


</body>

</html>