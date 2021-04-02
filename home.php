<?php

include 'members.php';
include 'admins.php';
$membersObj = new Members();
$adminsObj = new Admins();


// $result = $adminsObj->displayGymNames($_POST);


// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//     header("location: landingpage.html");
//     exit;
// }







?>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
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
    <link rel="stylesheet" href="gymDashboard.css" />
    <title> <?php echo $_SESSION['username'];
            echo "'s" ?> Dashboard</title>
</head>

<body>




    <?php if (isset($_SESSION['username'])) : ?>
        <p>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
        </p>
        <?php echo "This session ID is ", $_SESSION['id']; ?>


        <h1 style="text-align:center; color:green;">Available Gyms</h1>



        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Owner</th>
                    <th>Gym Name</th>
                    <th>Location</th>
                    <th>Available Time Slots</th>
                    <th>Monthly Membership Fee</th>



                </tr>
            </thead>
            <tbody>
                <?php
                $gym_names = $adminsObj->displayGymNames($_POST);
                foreach ($gym_names as $gym_name) {
                ?>
                    <tr>
                        <td><?php echo $gym_name['fname'] . " ", $gym_name['lname'] ?></td>
                        <td><?php echo $gym_name['gym_name'] ?></td>
                        <td><?php echo $gym_name['location'] ?></td>
                        <td><?php echo $gym_name['time_slot'] ?></td>
                        <td><?php echo $gym_name['cost_per_month'] ?></td>
                        <td> <a style="text-decoration: none;" href="gymDashboard.php">View Gym</a></td>


                        <!-- <td>
                            <a href="edit.php?editId=<?php echo $member['id'] ?>" style="color:black">
                                <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                            <a href="index.php?deleteId=<?php echo $member['id'] ?>" style="color:red">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <p>
            <a href="login.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>

        </p>

    <?php endif ?>





</body>

</html>