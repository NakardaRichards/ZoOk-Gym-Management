<?php
include '../trainers.php';



$trainersObj = new Trainers();


?>
<?php include_once('header.php'); ?>

<?php
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $trainer = $trainersObj->displayTrainerById($editId);
}



if (isset($_POST['update'])) {
    $trainersObj->updateTrainer($_POST);
}


?>


<?php include_once('trainerMenu.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Gym Details</h1>
    </div>



    <form action="traineredit.php" method="POST">
        <div class="form-row align-items-center">
            <div class="col-3">
                <label class="sr-only" for="inlineFormInput">First Name</label>
                First Name <input type="text" name="ufname" required="true" class="form-control mb-2" id="inlineFormInput">

                <label class="sr-only" for="">Last Name</label>
                Last Name<input type="text" name="ulname" required="true" class="form-control mb-2" id="">

                <label class="sr-only" for="">Age</label>
                Age<input type="text" name="uage" required="true" class="form-control mb-2" id="">

                <label class="sr-only" for="">Phone Number</label>
                Phone Number<input type="text" required="true" name="uphone" class="form-control mb-2" id="">


                <label class="sr-only" for="">Email</label>
                Email<input type="email" class="form-control mb-2" required="true" name="uemail" id="">



                <label class="sr-only" for="">Hourly fee</label>
                Hourly fee<input type="text" name="uhourly_fee" required="true" class="form-control mb-2" id="">


                <label class="sr-only" for="">Password</label>
                Password<input type="text" name="upass" required="true" class="form-control mb-2" id="">

            </div>



        </div>
        <div class="col-auto">
            <input type="hidden" name="id" value="<?php echo $trainer['id']; ?>">
            <button type="submit" name="update" value="Update" class="btn btn-primary mb-2">Update</button>

        </div>

    </form>

</div>


<?php include_once('footer.php'); ?>