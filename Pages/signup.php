<?php
     session_id();

     include '../PHP/users.php';
     
     $usersObj = new Users();

     if (isset($_POST['submit1'])) {
          $usersObj->signupData($_POST);
     }
?>

<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!--Fonts-->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
       
		<link rel="stylesheet" href="../css/form.css">
          <link rel="stylesheet" href="../css/style.css">

          <style type="text/css">
               body{
                    width: 100%;
                    background: url("../img/signback.jpg");
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
               }

               /* Additional Styles */
        
               h2 {
                    font-family: 'Euphoria Script', cursive;
                    font-size: 70px;
               }

               input{
                    font-family: 'Montserrat', sans-serif;
                    font-size: normal;
               }
          </style>
          
          <title>Annix | Sign Up</title>
          <link rel="icon" href="../img/AnnixCyanx.png">
     </head>
     <body>
        
     	<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
                                   <a href="./landing.php" style="text-decoration:none" >
                              <img class="logo" src="../img/AnnixCyanx.png">
                         </a>
							<form method="post" action="../Pages/signup.php" enctype="multipart/form-data">
                                        <div class="form-group">
									<label>Enter Your First Name:</label>
									<input type="text" name="fname" class="form-control" required />
								</div>
                                        <div class="form-group">
									<label>Enter Your Last Name:</label>
									<input type="text" name="lname" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email:</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="pass" class="form-control" required />
                                        </div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit1">Sign Up</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="../Pages/login.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="../Js/main.js"></script>
		<script src="../bootstrap/bootstrap.min.css"></script>
     </body>
</html>