<?php






class Users
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
            $_SESSION['login_user'] = $email;

            echo "Welcome", $_SESSION['login_user'];

            $_SESSION['logged_in_user_id'] = 1000;




            // $_SESSION['email'] = $email;

            header("Location:home.php");
        } else {
            echo "Login failed!";
        }
    }

    public function displayUsername($post)
    {



        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = ("SELECT email, pass FROM users WHERE email='$email' AND pass = '$password'");


        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['login_user'] = $email;

            echo "Welcome", $_SESSION['login_user'];

            // $email = $_POST['login_user'];
            return $row;
        }
    }


    public function admin($post)
    {



        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = ("SELECT * FROM users WHERE email='$email' AND pass = '$password'");
        $result = $this->con->query($query);
        if ($email == 'superman@gmail.com' and $password == 'supe') {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['success']  = "You are now logged in sir";
                header("Location:admin.php");
            }
        }
    }
}
