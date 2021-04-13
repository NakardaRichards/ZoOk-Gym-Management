<?php


// include 'members.php';
include 'admins.php';

// $membersObj = new Members();
$adminsObj = new Admins();
include 'gyms.php';
$gymsObj = new Gyms();

include 'trainers.php';
$trainersObj = new Trainers();



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

    <link rel="stylesheet" href="LandingPage.css">
    <title>Gym Page</title>
</head>

<body>

    <?php

    require_once 'gyms.php';

    // echo "hello" . $_REQUEST['id'];

    ?>
    <!-- <table class="table table-hover">
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
                    <td><?php echo $gym_name['fname'] . " " . $gym_name['lname'] ?></td>
                    <td><?php echo $gym_name['gym_name'] ?></td>
                    <td><?php echo $gym_name['location'] ?></td>
                    <td><?php echo $gym_name['time_slot'] ?></td>
                    <td><?php echo $gym_name['cost_per_month'] ?></td>




                </tr>
            <?php } ?>
        </tbody>
    </table> -->
    <h1 style="text-align: center;color:gold">
        <?php echo "Welcome to " . $gym_name['gym_name'] . " Owned by " . $gym_name['fname'] . " " . $gym_name['lname']  ?>
    </h1>
    <p>
        <?php
        echo "We are located " . $gym_name['location'];
        ?>
    </p>
    <h1>Our cost is <?php echo  " " . $gym_name['cost_per_month'] ?></h1>
    <h1>Owner name is <?php echo $gym_name['fname'] . " " . $gym_name['lname']  ?></h1>

    <h1>Our trainers include</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Hourly Fee</th>
                <th>Email</th>
                <th>Gym Name</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $trainers = $trainersObj->TrainersData($_POST);
            foreach ($trainers as $trainer) {
            ?>
                <tr>
                    <td><?php echo $trainer['fname'] ?></td>
                    <td><?php echo $trainer['lname'] ?></td>
                    <td><?php echo $trainer['age'] ?></td>
                    <td><?php echo $trainer['phone'] ?></td>
                    <td><?php echo $trainer['hourly_fee'] ?></td>
                    <td><?php echo $trainer['email'] ?></td>
                    <td><?php echo $trainer['gym_name'] ?></td>
                    <td><?php echo $trainer['pass'] ?></td>
                    <td>
                        <a href="traineredit.php?editId=<?php echo $trainer['id'] ?>" style="color:black">
                            <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <button name="submit1" type="submit" value="Submit" class="lbutn">Sign up to this gym</button>
    <p>
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