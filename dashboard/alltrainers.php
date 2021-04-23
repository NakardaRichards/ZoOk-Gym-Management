
<?php include_once('header.php'); ?>

<?php include_once('menu.php'); ?>
 <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Trainers</h1>                     
                    </div>     

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
                            <a href="../admin.php?deleteId=<?php echo $trainer['id'] ?>" style="color:red">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
         <?php include_once('footer.php'); ?>