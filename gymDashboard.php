<?php


// include 'members.php';
include 'admins.php';

// $membersObj = new Members();
$adminsObj = new Admins();
include 'gyms.php';
$gymsObj = new Gyms();

// include 'trainers.php';
// $trainersObj = new Trainers();



if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: landingpage.html");
    exit;
}

?>


<?php
if (isset($_POST["logout"])) {

    unset($_SESSION['id']);
    header("Location:home.php");
}
?>


<!-- <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $filename = 'FinalProject/gymDashboard' . $id . ' .php';

            if (file_exists($filename)) {
                include $filename;
            }
        }

        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Gym Page</title>
</head>

<body>

    <?php

    require_once 'gyms.php';

    echo "hello" . $_REQUEST['id'];

    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Owner</th>
                <th>Gym Name</th>
                <th>Location</th>
                <th>Available Time Slots</th>
                <th>Monthly Membership Fee</th>



            </tr>
        </thead>

        <tbody>
            <?php
            $gym_names = $gymsObj->gymPages($_POST);
            foreach ($gym_names as $gym_name) {
            ?>
                <tr>
                    <td><?php echo $gym_name['id'] ?></td>
                    <td><?php echo $gym_name['fname'] . " ", $gym_name['lname'] ?></td>
                    <td><?php echo $gym_name['gym_name'] ?></td>
                    <td><?php echo $gym_name['location'] ?></td>
                    <td><?php echo $gym_name['time_slot'] ?></td>
                    <td><?php echo $gym_name['cost_per_month'] ?></td>




                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h1 style="text-align: center;color:gold">
        <?php echo "Welcome to " . $gym_name['gym_name'] . " Owned by " . $gym_name['fname'] . " ", $gym_name['lname']  ?>
    </h1>
    <p>
        <?php
        echo "We are located " . $gym_name['location'];
        ?>
    </p>
    <ph>
        <a href="login.php?logout='1'" style="color: red;">
            Click here to Logout
        </a>

        </p>




        <!-- <form role="form" method="post">
        <div class="pull-right-container">
            <i class="icon fa fa-user">
                <input type="submit" value="logout" class="btn btn-danger" name="logout" />
            </i>
        </div>
    </form> -->










</body>

</html>