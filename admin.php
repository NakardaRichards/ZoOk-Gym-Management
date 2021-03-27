<?php
include 'admins.php';

// include 'members.php';



$adminsObj = new Admins();
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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $members = $membersObj->displayData();
                foreach ($members as $member) {
                ?>
                    <tr>
                        <td><?php echo $member['id'] ?></td>
                        <td><?php echo $member['fname'] ?></td>
                        <td><?php echo $member['lname'] ?></td>
                        <td><?php echo $member['age'] ?></td>
                        <td><?php echo $member['address'] ?></td>
                        <td><?php echo $member['dob'] ?></td>
                        <td><?php echo $member['email'] ?></td>
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
            <a href="adminlogin.php?logout='1'" style="color: red;">
                Click here to Logout
            </a>

        </p>

    <?php endif ?>


</body>

</html>