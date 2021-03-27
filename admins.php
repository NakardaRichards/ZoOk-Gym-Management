<?php

if (!isset($_SESSION)) {
    session_start();
}
include 'members.php';


class Admins
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
    public function adminSignup($post)
    {



        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);
        $password = $this->con->real_escape_string($_POST['pass']);
        $email = $this->con->real_escape_string($_POST['email']);
        $gym_name = $this->con->real_escape_string($_POST['gym_name']);




        $query = "INSERT INTO admins(fname,lname,email,gym_name,pass) VALUES('$fname','$lname','$email','$gym_name','$password')";
        $sql = $this->con->query($query);

        if ($sql == true) {
            $_SESSION['username'] = $fname;
            $_SESSION['gym_name'] = $gym_name;


            header("Location:admin.php");
        } else {
            echo "Failed to signup gym!";
        }
    }

    public function adminloginData($post)
    {

        $gym_name = $this->con->real_escape_string($_POST['gym_name']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "SELECT * FROM admins WHERE gym_name ='$gym_name' && pass ='$password'";


        $result = $this->con->query($query);
        $row = $result->fetch_assoc();





        if ($result->num_rows > 0) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['fname'];
            $_SESSION['gym_name'] = $row['gym_name'];
            header("Location:admin.php");
        } else {
            echo "Login failed!";
        }
    }
}
