<?php include_once('header.php'); ?>
<?php include_once('menu.php'); ?>
<?php include_once('../memberships.php.php'); ?>

<?php

$membershipsObj = new Memberships();

if (isset($_GET['deleteId2']) && !empty($_GET['deleteId2'])) {
    $deleteId = $_GET['deleteId2'];
    $adminsObj->deleteMessage($deleteId);
}


?>


<div style="text-align: center;">
    <h1 style="color: green;">Members Messages</h1>


    <table class=" table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Subject</th>
                <th>Message</th>
                <th>DELETE</th>





            </tr>
        </thead>
        <tbody>

            <?php
            $user_messages = $adminsObj->viewMessage($_POST);
            foreach ($user_messages as $user_message) {
            ?>

                <tr>
                    <td><?php echo $user_message['userName'] ?></td>
                    <td><?php echo $user_message['userEmail'] ?></td>
                    <td><?php echo $user_message['phone'] ?></td>
                    <td><?php echo $user_message['subject'] ?></td>
                    <td><?php echo $user_message['message'] ?></td>


                    <td>

                        <a href="gymEnquires.php?deleteId2=<?php echo $user_message['id'] ?>" style="color:red">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    <?php include_once('footer.php'); ?>