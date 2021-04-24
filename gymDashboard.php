<?php



include 'admins.php';

$adminsObj = new Admins();
include 'gyms.php';
$gymsObj = new Gyms();

include 'trainers.php';
$trainersObj = new Trainers();

if (isset($_POST['submit1'])) {
    $gymsObj->membership($_POST);
}

if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: LandingPage.html");
    exit;
}

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="LandingPage.css">
    <title>Gym Page</title>
</head>

<body>



    <?php
    $gym_names = $gymsObj->gymPages($_POST);
    foreach ($gym_names as $gym_name) {
    ?>

    <?php } ?>

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




    <button name="submit1" type="submit" value="Submit" class="lbutn">Sign up to this gym</button>
    <br>
    <br>
    <br>
    <?php echo $trainer['gym_name']; ?>
    <p>
        <a href="login.php?logout='1'" style="color: red;">
            Click here to Logout
        </a>

    </p>



    <!-- 
    <form role="form" method="post">
        <div class="pull-right-container">
            <i class="icon fa fa-user">
                <input type="submit" value="logout" class="btn btn-danger" name="logout" />
            </i>
        </div>
    </form> -->










</body>

</html>