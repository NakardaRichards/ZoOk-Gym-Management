<?php
include 'admins.php';






$adminsObj = new Admins();





if (isset($_POST['submit'])) {
    $adminsObj->adminloginData($_POST);
}





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="adminlogin.js">
    </script>
    <link rel="stylesheet" href="adminlogin.css">
    <title>Admin Login</title>


</head>

<body>

</body>

</html>