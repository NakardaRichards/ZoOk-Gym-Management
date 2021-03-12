<?php






class Users
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
        $username = $this->con->real_escape_string($_POST['username']);
        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "INSERT INTO users(username,email,pass) VALUES('$username','$email','$password')";
        $sql = $this->con->query($query);
        if ($sql == true) {
            header("Location:home.php");
        } else {
            echo "Failed to signup!";
        }
    }



    public function loginData($post)
    {


        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);



        $query = ("SELECT email, pass FROM users WHERE email='$email' AND pass = '$password'");

        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $user['email'];
            $_SESSION['success']  = "You are now logged in";

            header("Location:home.php");
        } else {
            echo "Login failed!";
        }
    }

    public function displayUsername($post)
    {



        $email = $this->con->real_escape_string($_POST['email']);
        $query = ("SELECT email FROM users WHERE email = '$email' ");


        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            return $row;
        }
    }
    public function admin($post)
    {



        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = ("SELECT * FROM users WHERE email='$email' AND pass = '$password'");
        $result = $this->con->query($query);
        if ($email == 'nakardarichards3@gmail.com' and $password == 'cenation2') {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['success']  = "You are now logged in sir";
                header("Location:admin.php");
            }
        }
    }
}
