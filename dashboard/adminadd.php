

<?php include_once('header.php'); ?>
<?php




if (isset($_POST['submit'])) {
    $adminsObj->addTrainer($_POST);
}

?>
<?php include_once('menu.php'); ?>
 <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Trainers</h1>                     
                    </div>     

<form class="login100-form validate-form" action="adminadd.php" method="POST">
    <div class="col-3">
      <label class="sr-only" for="inlineFormInput">First Name</label>
     First Name <input type="text" name="fname" required="true" class="form-control mb-2" id="inlineFormInput">
  
      <label class="sr-only" for="">Last Name</label>
      Last Name<input type="text"  name="lname" required="true"  class="form-control mb-2" id="">

        <label class="sr-only" for="">Age</label>
     Age<input type="number"  name="age" required="true"  class="form-control mb-2" id="">

        <label class="sr-only" for="">Phone</label>
      Phone<input type="text"  required="true"  name="phone" class="form-control mb-2" id="">
       <label class="sr-only" for="">Hourly Rate</label>
      Hourly Rate<input type="text"  required="true"  name="hourly_fee" class="form-control mb-2" id="">
    <label class="sr-only" for="">Email</label>
      Email<input type="email" class="form-control mb-2" required="true"  name="email" id="">

        <label class="sr-only" for="">Gym Name</label>
      Gym Name<input type="text" value="<?php echo $_SESSION['gym_name']; ?>" class="form-control mb-2" required="true"  name="gym_name" id="" readonly>

        <label class="sr-only" for="">Password</label>
      Password<input type="password" name="pass" required="true"  class="form-control mb-2" id="">

    </div>

  <div class="col-auto">
     
      <button type="submit" name="submit" value="Submit"  class="btn btn-primary mb-2">Assign Trainer</button>

  </div>
</form>


                </div>
         <?php include_once('footer.php'); ?>