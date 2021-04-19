<?php

if (!isset($_SESSION)) {
    session_start();
}






class Trainers
{

    private $servername = "localhost";
    private $username   = "root";
    private $password   = "cenation2";
    private $database   = "content";
    public  $con;


    public function
    __construct()
    {


        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_errno());
        } else {

            return $this->con;
        }
    }

    public function displayTrainerById($id)
    {
        $query = "SELECT * FROM trainers WHERE id = '$id' ";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Data not found";
        }
    }

    public function loginData($post)
    {

        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "SELECT * FROM trainers WHERE email ='$email' && pass ='$password'";


        $result = $this->con->query($query);
        $row = $result->fetch_assoc();

        if ($result->num_rows > 0) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['fname'];
            $_SESSION['gym_name'] = $row['gym_name'];
            header("Location:trainersdash.php");
        } else {
            echo "Login failed!";
        }
    }

    public function updateTrainer($postData)
    {

        $fname = $this->con->real_escape_string($_POST['ufname']);
        $lname = $this->con->real_escape_string($_POST['ulname']);
        $email = $this->con->real_escape_string($_POST['uemail']);
        $age = $this->con->real_escape_string($_POST['uage']);
        $phone = $this->con->real_escape_string($_POST['uphone']);
        $hourly_fee = $this->con->real_escape_string($_POST['uhourly_fee']);


        $password = $this->con->real_escape_string($_POST['upass']);
        $id = $this->con->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE trainers SET fname = '$fname', lname = '$lname', email = '$email',age = '$age', phone = '$phone', hourly_fee = '$hourly_fee', pass = '$password' WHERE id = '{$_SESSION['id']}'";
            $sql = $this->con->query($query);
            if ($sql == true) {
                header("Location:trainersdash.php");
            } else {
                echo "Data update failed try again!";
            }
        }
    }

    public function Trainers($post)
    {

        $query = "SELECT * FROM trainers WHERE id = '{$_SESSION['id']}'";
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {

            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No Data found";
        }
    }

    public function TrainersData($post)
    {
        $gym_name = $this->con->real_escape_string($_POST['gym_name']);
        $query = "SELECT * FROM trainers WHERE id = '{$_REQUEST['id']}'  ";
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {

            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No Data found";
        }
    }
}
