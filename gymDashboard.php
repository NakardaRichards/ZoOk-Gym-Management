<?php

include 'members.php';
include 'admins.php';
$membersObj = new Members();
$adminsObj = new Admins();






?>

<?php
if (isset($_POST["logout"])) {

    unset($_SESSION['id']);
    header("Location:home.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Dashboard</title>
</head>

<body>



    <content>
        <h1><?php echo $row['gym_name']; ?>
           
        </h1>


    </content>


    <form role="form" method="post">
        <div class="pull-right-container">
            <i class="icon fa fa-user">
                <input type="submit" value="logout" class="btn btn-danger" name="logout" />
            </i>
        </div>
    </form>










</body>

</html>