<?php
session_start();




class Members
{

    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
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

    public function signupData($post)
    {
        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);
        $age = $this->con->real_escape_string($_POST['age']);
        $address = $this->con->real_escape_string($_POST['address']);
        $dob = $this->con->real_escape_string($_POST['dob']);
        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "INSERT INTO members(fname,lname,age,address,dob,email,pass) VALUES('$fname','$lname','$age','$address','$dob','$email','$password')";
        $sql = $this->con->query($query);

        if ($sql == true) {
            $_SESSION['username'] = $fname;



            header("Location:home.php");
        } else {
            echo "Failed to signup!";
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



            header("Location:admin.php");
        } else {
            echo "Failed to signup gym!";
        }
    }


    public function loginData($post)
    {

        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);

        $password = $this->con->real_escape_string($_POST['pass']);

        $query = ("SELECT fname,lname, pass FROM members WHERE fname='$fname' AND lname ='$lname' AND pass = '$password'");

        $sql = $this->con->query($query);
        if ($sql == true) {
            $_SESSION['username'] = $fname;



            $_SESSION['username'] = $fname;

            header("Location:home.php");
        } else {
            echo "Login failed!";
        }
    }
}
