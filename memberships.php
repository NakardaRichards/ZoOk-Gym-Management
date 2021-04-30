<?php



if (!isset($_SESSION)) {
    session_start();
}



class Memberships
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

    public function membership($post)
    {
        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);
        $age = $this->con->real_escape_string($_POST['age']);
        $address = $this->con->real_escape_string($_POST['address']);
        $dob = $this->con->real_escape_string($_POST['dob']);
        $phone = $this->con->real_escape_string($_POST['phone']);
        $gym_name = $this->con->real_escape_string($_POST['gym_name']);
        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);
        $query = "INSERT INTO membership(fname,lname,age,address,dob,phone,gym_name,email,pass) VALUES('$fname','$lname','$age','$address','$dob','$phone','$gym_name','$email','$password')";

        $sql = $this->con->query($query);

        if ($sql == true) {

            $_SESSION['username'] = $fname;
            $_SESSION['gym_name'] = $gym_name;
            header("Location:dashboard/gymEnquires.php");
        } else {
            echo "failed to insert data!";
        }
    }






    public function gymMembership($post)
    {
        $email = $this->con->real_escape_string($_POST['email']);

        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "SELECT * FROM membership WHERE email ='$email' && pass ='$password' ";

        $result = $this->con->query($query);
        $row = $result->fetch_assoc();


        if ($result->num_rows > 0) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['fname'];
            $_SESSION['gym_name'] = $row['gym_name'];
            // header("Location:gymEnquires.php");
            header("Location:messages/index.php");
        } else {
            echo "Login failed!";
        }
    }


    public function memberships($post)
    {

        $query = "SELECT * FROM membership WHERE id = '{$_SESSION['id']}'  ";
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

    public function members($post)
    {

        $query = "SELECT * FROM membership WHERE gym_name = '{$_SESSION['gym_name']}' ";
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

    public function message($post)
    {
        $fname = $this->con->real_escape_string($_POST['userName']);

        $email = $this->con->real_escape_string($_POST['userEmail']);


        $phone = $this->con->real_escape_string($_POST['phone']);
        $subject = $this->con->real_escape_string($_POST['subject']);

        $message = $this->con->real_escape_string($_POST['message']);
        $gym_name = $this->con->real_escape_string($_POST['gym_name']);
        $query = "INSERT INTO message(userName,userEmail,phone,gym_name,subject,message) VALUES('$fname','$email','$phone','$gym_name','$subject','$message')";

        $sql = $this->con->query($query);

        if ($sql == true) {

            $_SESSION['username'] = $fname;
            $_SESSION['gym_name'] = $gym_name;
            header("Location:index.php");
        } else {
            echo "failed to send message";
        }
    }
}
