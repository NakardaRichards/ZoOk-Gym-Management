<?php






class Gyms
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


    public function gymPages($post)
    {
        $id = $this->con->real_escape_string($_POST['id']);
        $query = "SELECT * FROM admins WHERE id = '{$_REQUEST['id']}'  ";
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
