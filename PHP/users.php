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


    public function insertChat($post)

    {   
        $outgoing_id = $ran_id = rand(time(), 100000000);
        $username = $_SESSION['username'];
        
        $message = $this->con->real_escape_string($_POST['message']);
    
           
             $query = "INSERT INTO messages(outgoing_msg_id,username,msg)
            VALUES ('$outgoing_id','$username','$message')";
           
               $sql = $this->con->query($query);
      
    }


    // public function msgCount($post)
    // {
    //     // $query = "SELECT COUNT(msg) FROM messages WHERE (username = '{$_SESSION['username']}')";
    //     $query = "SELECT COUNT(msg) FROM messages ";
    //     $result = $this->con->query($query);
        
    //     if ($result->num_rows > 0) {

    //         $data = array();
    //         while ($row = $result->fetch_assoc()) {
    //             $data[] = $row;
    //         }
    //         return $data;
    //     } else {
    //         echo "No message sent";
    //     }
    // }
    
    public function msgCount($post)
    {
        // $query = "SELECT COUNT(msg) FROM messages WHERE (username = '{$_SESSION['username']}')";
        $query = "SELECT count(*) FROM messages WHERE (username = '{$_SESSION['username']}')";
$result = $this->con->query($query);
  

while($row = mysqli_fetch_array($result)) {
    echo "Number of Sent messages: ". $row['count(*)'];
    echo "<br />";
}
    }

    public function disMessage($post)
    {
        // if(isset($_SESSION['unique_id'])){
        // $outgoing_id = $_SESSION['unique_id'];
        // $_SESSION['unique_id'];
        $query = "SELECT * FROM messages LEFT JOIN users on users.unique_id = messages.outgoing_msg_id
        WHERE (username = '{$_SESSION['username']}') ORDER BY msg_id";
        $result = $this->con->query($query);
        
        if ($result->num_rows > 0) {

            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No messages are available. Once you send message they will appear here.";
        }
    }
    
    public function signupData($post)
    {
        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);
        $email = $this->con->real_escape_string($_POST['email']);
        $password = $this->con->real_escape_string($_POST['pass']);
        $ran_id = rand(time(), 100000000);
        $query = "INSERT INTO users(unique_id,fname,lname,email,pass) VALUES('$ran_id','$fname','$lname','$email','$password')";
        $sql = $this->con->query($query);

        if ($sql == true) {
            $_SESSION['username'] = $fname;
            $_SESSION['unique_id'] = $ran_id;
            // header("Location:Dashboard/dash.php");
            // header("Location:Dashboard/redirect.php");
            header("Location:login.php");
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

