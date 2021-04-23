<?php include_once('header.php'); ?>

<?php
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
}



if (isset($_POST['update'])) {
    $adminsObj->updateData($_POST);
}



?>


<?php include_once('menu.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Update Gym Details</h1>                     
                    </div>                           
               


               <form action="adminedit.php" method="POST" >
  <div class="form-row align-items-center">
    <div class="col-3">
      <label class="sr-only" for="inlineFormInput">First Name</label>
     First Name <input type="text" name="fname" required="true" class="form-control mb-2" id="inlineFormInput">
  
      <label class="sr-only" for="">Last Name</label>
      Last Name<input type="text"  name="ulname" required="true"  class="form-control mb-2" id="">

        <label class="sr-only" for="">Gym's Location</label>
     Gym's Location<input type="text"  name="ulocation" required="true"  class="form-control mb-2" id="">

        <label class="sr-only" for="">Gym's Available Time Slots</label>
      Gym's Available Time Slots<input type="text"  required="true"  name="utime_slot" class="form-control mb-2" id="">


        <label class="sr-only" for="">Email</label>
      Email<input type="email" class="form-control mb-2" required="true"  name="uemail" id="">

        <label class="sr-only" for="">Gym Name</label>
      Gym Name<input type="text" class="form-control mb-2" required="true"  name="ugym_name" id="">

        <label class="sr-only" for="">Monthly Membership Fee</label>
      Monthly Membership Fee<input type="text" name="ucost_per_month" required="true"  class="form-control mb-2" id="">

    </div>
  
  

  </div>
  <div class="col-auto">
    <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
      <button type="submit" name="update" value="Update"  class="btn btn-primary mb-2">Update</button>

  </div>

</form>
             
 </div>


        <?php include_once('footer.php'); ?>