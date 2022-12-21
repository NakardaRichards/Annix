<?php include_once('C:\xampp\htdocs\FinalProject\PHP\users.php');

$usersObj = new Users();
$greetingsObj = new Users();

if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: ../landing.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo   $_SESSION['username'] .' Chat Room ' . $_SESSION['unique_id'] ?></title>
        
    <link rel="stylesheet" href="/FinalProject/css/sidebar.css">
    <link rel="stylesheet" href="/FinalProject/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/FinalProject/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link href="/FinalProject/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/FinalProject/css/chatstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<!-- The sidebar -->

<div class="sidenav">

<a href="../landing.php" style="text-decoration:none">
<img class="logo" src="/FinalProject/img/AnnixWhite.png">
</a>



  <a  href="./dash.php">
  <span class="material-icons">
home
</span> Dashboard</a>

  <a class="active" href="./chatroom.php"> 
  <span class="material-icons">
chat
</span>Chat Room</a>
  <!-- <a href="./annix.php">
  <span class="material-icons">
person
</span>
Annix</a> -->
  <a href="./brain.php"> <span class="material-icons">
psychology
</span>Brain</a>
</div>

<!-- Page content -->
<div class="content">


<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">


            <ul class="navbar-nav ml-auto">


                <div class="topbar-divider d-none d-sm-block"></div>


                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="../landing.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username: <?php echo '<b>' . $_SESSION['username'] . '</b>'; ?> </span>
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <b style="color:red;"> Logout</b>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./logout.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Continue
                        </a>
                    </div>
                </li>

            </ul>

        </nav>


        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <!-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> -->
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="logout.php">Logout</a>
             </div>
             
         </div>
         
     </div>
 </div>

</div>

<script src="/FinalProject/vendor/jquery/jquery.min.js"></script>
<script src="/FinalProject/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/FinalProject/Js/sb-admin-2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
		<script src="/FinalProject/Js/main.js"></script>

        
        <div class="cont">

        <h2>Chat Room</h2>


<a  href="./chatroom.php" class="chat_modes">
  <span class="material-icons">
textsms
</span> Text Chat</a>


<a  href="./voiceroom.php" class="chat_modes">
  <span class="material-icons">
mic
</span> Voice Chat</a>



        <?php
session_start();
include_once('C:\xampp\htdocs\FinalProject\PHP\users.php');
if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
  header("location: ../landing.php");
  exit;
}
?>


<div class="wrapper">
        <div class="title">Annix</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <!-- <p>Hello <?php echo $_SESSION['username'] ?> , how can I help you?</p> -->
                    <?php
                  
                  $greetings = $greetingsObj->displayData($_POST);
                foreach ($greetings as $greeting) {
                ?>

                <p><?php echo $greeting['greeting'] ?> </p>


                        <?php } ?>
                </div>
            </div>
        </div>


<div class="typing-field">
            <div class="input-data">
      

    
        <input id="msg"  type="text" class="input-field" placeholder="Type a message here..." required></input>
        <button onclick="startNarration()" id="send-btn" >Send</button>
    </div>
    <div>
    </div>

</form>
<script>

        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#msg").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#msg").val('');
                
                // start ajax code
     
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                      
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
                $.ajax({
                    url: 'insertChat.php',
                    type: 'POST',
                    data: 'message='+$value,
                    success: function(result){
                       
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
        function startNarration() {
   
    var msg = new SpeechSynthesisUtterance();
    url: 'insertChat.php'
    msg.text = $replay
    
    // Change the narration voice
    msg.voice = window.speechSynthesis.getVoices()[1]; // Select the second voice in the list of available voices

    window.speechSynthesis.speak(msg);
  }
        
    </script>
  <!-- <div class="col-lg-3 col-md-6 col-sm-6" style="font-size:14px">
            <div class="card card-stats">
              <div class="card-body " style="background-color: #32325d; color:#e14eca; ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category" style=" transform: translate(-20px, 20px);" >Current Time</p>
                      <p class="card-title">
                        <br>


<div style=" transform: translate(-20px, 20px);" >


</div>

           
  
<p>
           
</div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
               
              </div>
            </div>
          </div>
        </div> -->
        

</div>
<style>


.dark-mode {
  background-color: black;
  color: white;
  
}

.dark-mode .title{
  background-color: white;
  color: black;
  
}

.dark-mode .form{
  background-color: grey;
 
  
}
</style>
</head>
<body>


<button class="button-15" role="button"onclick="myFunction()" style="transform: translate(600px, -500px);">Go dark</button>


<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
</body>

</html>
        </div>
        <script src="/Js/chat.js"></script>
  
</body>
</html>