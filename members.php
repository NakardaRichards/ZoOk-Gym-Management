<?php
if (!isset($_SESSION)) {
    session_start();
}


class Members
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



            header("Location:login.php");
        } else {
            echo "Failed to signup!";
        }
    }
    // public function gymSignup($post)
    // {
    //     $fname = $this->con->real_escape_string($_POST['fname']);
    //     $lname = $this->con->real_escape_string($_POST['lname']);
    //     $age = $this->con->real_escape_string($_POST['age']);
    //     $address = $this->con->real_escape_string($_POST['address']);
    //     $dob = $this->con->real_escape_string($_POST['dob']);
    //     $email = $this->con->real_escape_string($_POST['email']);
    //     $password = $this->con->real_escape_string($_POST['pass']);

    //     $query = "INSERT INTO members(fname,lname,age,address,dob,email,pass) VALUES('$fname','$lname','$age','$address','$dob','$email','$password') ";
    //     $sql = $this->con->query($query);

    //     if ($sql == true) {
    //         $_SESSION['username'] = $fname;



    //         header("Location:login.php");
    //     } else {
    //         echo "Failed to signup!";
    //     }
    // }



    public function loginData($post)
    {

        $email = $this->con->real_escape_string($_POST['email']);

        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "SELECT * FROM members WHERE email ='$email' && pass ='$password'";



        $result = $this->con->query($query);
        $row = $result->fetch_assoc();


        if ($result->num_rows > 0) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['fname'] . " " . $row['lname'];
            header("Location:home.php");
        } else {
            echo "Login failed!";
        }
    }

    public function displayData($post)
    {
        $query = "SELECT * FROM members ";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No members found";
        }
    }


    public function displayGymNames($post)
    {



        $query = "SELECT * FROM admins  ";
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
