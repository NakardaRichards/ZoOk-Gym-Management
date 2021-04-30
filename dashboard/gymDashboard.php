<?php include_once('header.php'); ?>
<?php include_once('menu.php'); ?>
<?php include_once('admins.php'); 


$adminsObj = new Admins();
include_once('../gyms.php'); 
$gymsObj = new Gyms();

include '../trainers.php';
$trainersObj = new Trainers();


if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: ../LandingPage.html");
    exit;
}

?>

 <table class="table table-hover">
    <thead>
        <tr>
    <?php
    $gym_names = $gymsObj->gymPages($_POST);
    foreach ($gym_names as $gym_name) {
    ?>

    <?php } ?>
 <h1 style="text-align: center;color:gold">
        <?php echo "Welcome to " . $gym_name['gym_name'] ;  ?>
    </h1>
            <th>Location</th>
            <th>Our Cost</th>
            <th>Owner</th>
            <th></th>
            <th></th>              
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
            <tr>

                <td><?php  echo  $gym_name['location'];?></td> 
                <td><?php echo   $gym_name['cost_per_month'] ?> </td> 
                <td> <?php echo $gym_name['fname'] . " " . $gym_name['lname'] ;?></td> 
                <td> </td> 
                <td> </td> 
                <td>
                    <a href="../membership.php" style="color:red">
                        Signup to this gym
                  
                    </a>
                </td>
            </tr>
      
    </tbody>
</table>
 <div style="text-align: center;">
        <h1 style="color: green;">This gym's current Post</h1>
    </div>
 <p><?php echo $gym_name['message']; ?> </p>
 
 


   