<?php
include 'admins.php';

include 'members.php';


$membersObj = new Members();

$adminsObj = new Admins();


if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: landingpage.html");
    exit;
}


if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $adminsObj->deleteTrainer($deleteId);
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <title>Master <?php echo $_SESSION['username']; ?></title>
</head>

<body>


    <?php if (isset($_SESSION['username'])) : ?>
        <p>
            <!-- <a class="simple-text logo-normal">
                Your Logo
                <div class="logo-image-big">
                    <img src="images/o.png">
                </div> -->
            </a>
            </div>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
            from <?php echo $_SESSION['gym_name']; ?>

            <?php echo "This session ID is ", $_SESSION['id']; ?>

        </p>
        <h1 style="text-align:center; color:green;">Your Gym's Details</h1>
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Location</th>
                    <th>Gym Name</th>
                    <th>Email</th>
                    <th>Available Time Slots</th>
                    <th>Monthly Membership Fee USD</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $details = $adminsObj->displayGymDetails($_POST);
                foreach ($details as $detail) {
                ?>
                    <tr>

                        <td><?php echo $detail['fname'] ?></td>
                        <td><?php echo $detail['lname'] ?></td>
                        <td><?php echo $detail['location'] ?></td>
                        <td><?php echo $detail['gym_name'] ?></td>
                        <td><?php echo $detail['email'] ?></td>
                        <td><?php echo $detail['time_slot'] ?></td>
                        <td><?php echo $detail['cost_per_month'] ?></td>
                        <td>
                            <a href="adminedit.php?editId=<?php echo $detail['id'] ?>" style="color:gold">
                                <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                            <!-- <a href="index.php?deleteId=<?php echo $detail['id'] ?>" style="color:red">
                                <i class="fa fa-trash" aria-hidden="true"></i> -->
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


        <!-- <p>
            <a href="adminlogin.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>

        </p> -->
        <!-- <?php
                if (isset($_GET['logout'])) {
                    session_destroy();
                    unset($_SESSION['username']);
                    unset($_SESSION['id']);
                    header("Location:adminlogin.php");
                }
                ?> -->

        <?php
        if (isset($_POST["logout"])) {
            session_destroy();
            unset($_SESSION['username']);
            unset($_SESSION['id']);
            header("Location:adminlogin.php");
        }
        ?>
        <!-- <button input type="submit" value="logout" class="btn btn-danger" name="logout"> Click here to Logout
        </button> -->

        <div style="text-align: center;">
            <br>
            <a href="adminadd.php" class="btn btn-primary" style="text-align:center">Add New Trainers</a>
        </div>

        <hr>
        <br>
        <h1 style="text-align:center; color:green;">Your Current Trainers</h1>

        <table class=" table table-hover">
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
                    <th>Fire</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $trainers = $adminsObj->Trainers($_POST);
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
                            <!-- <a href="traineredit.php?editId=<?php echo $trainer['id'] ?>" style="color:black">
                                <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp -->
                            <a href="admin.php?deleteId=<?php echo $trainer['id'] ?>" style="color:red">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <br>
        <form role="form" method="post">
            <div class="pull-right-container">
                <i class="icon fa fa-user">
                    <input type="submit" value="logout" class="btn btn-danger" name="logout" />
                </i>
            </div>
        </form>

    <?php endif ?>




</body>

</html>