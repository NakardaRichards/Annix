<?php include('C:/xampp/htdocs/FinalProject/PHP/users.php');

$usersObj = new Users();

if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: ../landing.php");
    exit;
}

if (isset($_POST['message'])) {
  $usersObj->insertChat($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username']  ?> and Annix</title>
    <link rel="stylesheet" href="/FinalProject/css/chatstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title">Annix</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello <?php echo $_SESSION['username']  ?> how can I help you?</p>
                </div>
            </div>
        </div>
        <!-- <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div> -->
<!-- 
    <form action="#" method="POST">
        <div class="typing-field">
            <div class="input-data">

                <input id="data" type="text" name="message" placeholder="Type something here..">
                <button id="send-btn" name="message">Send</button>
            </div>
        </div>
    </div>
</form> -->



    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
    
<button class="button-15" role="button" onclick="history.back()">Go Back</button>
    
</body>
</html>

