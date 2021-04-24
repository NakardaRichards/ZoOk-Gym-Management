
<?php include_once('header.php'); ?>
<?php include_once('menu.php'); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="buttons2.css">
<link rel="stylesheet" href="textarea.scss">


        
            

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
                 
                 <div style="text-align: center;">
                     <h1>Current Post</h1>
                 </div>

<div class="wrapper">
  <h1>Post Message on gym page</h1>
  <textarea name="the-textarea" id="the-textarea" maxlength="300" placeholder="Start Typin..."autofocus></textarea>
 
</div>

                            <div>
                        <button  class="lbutn" name="submit" type="submit" value="Submit">Post message from gym</button>
                    </div>
                 

                    <div>
                        <button  class="lbutn2" name="submit" type="submit" value="Submit">Edit Post from gym</button>
                    </div>
                    

<br>
<?php include_once('footer.php'); ?>