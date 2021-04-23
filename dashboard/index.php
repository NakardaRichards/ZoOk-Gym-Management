<?php include_once('header.php'); ?>
<?php include_once('menu.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>                    
                    </div>                           
                </div>
           
            

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
                            <a href="adminedit.php?editId=<?php echo $detail['id'] ?>" style="color:red">
                                <i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp
                            <!-- <a href="index.php?deleteId=<?php echo $detail['id'] ?>" style="color:red">
                                <i class="fa fa-trash" aria-hidden="true"></i> -->
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
                    </div>

<?php include_once('footer.php'); ?>