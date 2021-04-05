<?php


include 'members.php';
include 'trainers.php';

$membersObj = new Members();



$trainersObj = new Trainers();

// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//     header("location: landingpage.html");
//     exit;
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer <?php echo $_SESSION['username']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <?php if (isset($_SESSION['username'])) : ?>
        <p>
            </a>
            </div>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
            from <?php echo $_SESSION['gym_name']; ?>

            <?php echo "This session ID is ", $_SESSION['id']; ?>
        <?php endif ?>

        <h1 style="text-align:center; color:green;">Your Details</h1>

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

                $trainers = $trainersObj->Trainers($_POST);
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

        <?php
        if (isset($_POST["logout"])) {
            session_destroy();
            unset($_SESSION['username']);
            unset($_SESSION['id']);
            header("Location:landingpage.html");
        }
        ?>
        <br>
        <br>
        <form role="form" method="post">
            <div class="pull-right-container">
                <i class="icon fa fa-user">
                    <input type="submit" value="logout" class="btn btn-danger" name="logout" />
                </i>
            </div>
        </form>
</body>

</html>