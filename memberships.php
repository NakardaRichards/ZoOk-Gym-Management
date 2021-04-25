<?php






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
            $_SESSION['gym_name'] = $gym_name;
            header("Location:allmembers.php");
        } else {
            echo "failed to insert data!";
        }
    }

    public function gymMembership($post)
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
            echo "No Data found";
        }
    }
}