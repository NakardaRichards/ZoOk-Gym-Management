
<?php include_once('header.php'); ?>

<?php include_once('menu.php'); ?>
 <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Members</h1>                     
                    </div>     

<table class=" table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    
                
                   
                </tr>
            </thead>
            <tbody>
                <?php

$memberships = $membershipsObj->gymMembership($_POST);
                foreach ($memberships as $membership) {
                ?>
                    <tr>
                        <td><?php echo $membership['fname'] ?></td>
                        <td><?php echo $membership['lname'] ?></td>
                        <td><?php echo $membership['age'] ?></td>
                        <td><?php echo $membership['phone'] ?></td>
                        <td><?php echo $membership['address'] ?></td>
                        <td><?php echo $membership['email'] ?></td>
                      
                      
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
         <?php include_once('footer.php'); ?>