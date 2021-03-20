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
        $id = $this->con->real_escape_string($_POST['id']);
        $username = $this->con->real_escape_string($_POST['username']);
        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "INSERT INTO users(username,email,pass) VALUES('$username','$email','$password')";
        $sql = $this->con->query($query);

        if ($sql == true) {
            $_SESSION['username'] = $username;

            header("Location:home.php");
        } else {
            echo "Failed to signup!";
        }
    }



    public function loginData($post)
    {

        $username = $this->con->real_escape_string($_POST['username']);

        $password = $this->con->real_escape_string($_POST['pass']);

        $query = ("SELECT username, pass FROM users WHERE username='$username' AND pass = '$password'");


        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $_SESSION['username'] = $username;
            header("Location:home.php");
        } else {
            echo "Login failed!";
        }
    }

    // public function displayUsername($post)
    // {



    //     $email = $this->con->real_escape_string($_POST['email']);
    //     $password = $this->con->real_escape_string($_POST['pass']);

    //     $query = ("SELECT email, pass FROM users WHERE email='$email' AND pass = '$password'");


    //     $result = $this->con->query($query);
    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         $_SESSION['login_user'] = $email;

    //         echo "Welcome", $_SESSION['login_user'];

    //         // $email = $_POST['login_user'];

    //     }
    // }


    // function getUserById($id)
    // {
    //     $id = $this->con->real_escape_string($_POST['id']);
    //     $query = "select * FROM users WHERE id = ?";
    //     $paramType = "i";
    //     $paramArray = array($id);
    //     $userResult = $this->con->query($query, $paramType, $paramArray);

    //     return $userResult;
    // }


    // function check_login($con)
    // {
    //     if (isset($_SESSION['id'])) {
    //         $id = $_SESSION['id'];
    //         $query = "SELECT * FROM users WHERE id='$id' limit 1";
    //         $result = mysqli_query($con, $query);
    //         if ($result && mysqli_num_rows($result > 0)) {
    //             $row = mysqli_fetch_assoc($result);
    //             return $row;
    //         }
    //     }

    //     header("Location:login.php");
    //     die;
    // }
    // public function processLogin($username, $password)
    // {
    //     $passwordHash = md5($password);
    //     $query = "select * FROM users WHERE username = ? AND pass = ?";
    //     $paramType = "ss";
    //     $paramArray = array($username, $passwordHash);
    //     $userResult = $this->ds->select($query, $paramType, $paramArray);
    //     if (!empty($userResult)) {
    //         $_SESSION["id"] = $userResult[0]["id"];
    //         return true;
    //     }
    // }

    public function admin($post)
    {



        $username = $this->con->real_escape_string($_POST['username']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = ("SELECT * FROM users WHERE username='$username' AND pass = '$password'");
        $result = $this->con->query($query);
        if ($username == 'Superman' and $password == 'supe') {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['success']  = "You are now logged in sir";
                header("Location:admin.php");
            }
        }
    }
}
