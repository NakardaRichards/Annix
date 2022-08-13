<?php
if (!isset($_SESSION)) {
    session_start();
}


class Users
{

    private $servername = "localhost";
    private $username   = "root";
    private $password   = "cenation2";
    private $database   = "annix";
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
        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "INSERT INTO users(fname,lname,email,pass) VALUES('$fname','$lname','$email','$password')";
        $sql = $this->con->query($query);

        if ($sql == true) {
            $_SESSION['username'] = $fname;



            header("Location:Dashboard/dash.php");
        } else {
            echo "Failed to signup!";
        }
    }


    public function loginData($post)
    {

        $email = $this->con->real_escape_string($_POST['email']);

        $password = $this->con->real_escape_string($_POST['pass']);

        $query = "SELECT * FROM users WHERE email ='$email' && pass ='$password'";



        $result = $this->con->query($query);
        $row = $result->fetch_assoc();


        if ($result->num_rows > 0) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['fname'] . " " . $row['lname'];
            $_SESSION['class'] = $row['class'];
            header("Location:Dashboard/dash.php");
        } else {
            echo "Login failed!";
        }
    }
}
    // public function displayData($post)
    // {
    //     $query = "SELECT * FROM members ";
    //     $result = $this->con->query($query);
    //     if ($result->num_rows > 0) {
    //         $data = array();
    //         while ($row = $result->fetch_assoc()) {
    //             $data[] = $row;
    //         }
    //         return $data;
    //     } else {
    //         echo "No members found";
    //     }
    // }


//     public function displayGymNames($post)
//     {



//         $query = "SELECT * FROM admins  ";
//         $result = $this->con->query($query);

//         if ($result->num_rows > 0) {

//             $data = array();
//             while ($row = $result->fetch_assoc()) {
//                 $data[] = $row;
//             }
//             return $data;
//         } else {
//             echo "No Data found";
//         }
//     }
