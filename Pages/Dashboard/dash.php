<?php include_once('C:\xampp\htdocs\FinalProject\PHP\users.php');


$usersObj = new Users();

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
    <title> <?php echo  'Hello '  . $_SESSION['username'] ?></title>
    
    <link rel="stylesheet" href="/FinalProject/css/sidebar.css">
    <link rel="stylesheet" href="/FinalProject/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

<a href="./landing.php" style="text-decoration:none">

</a>
<!-- The sidebar -->

<div class="sidenav">

<a href="../landing.php" style="text-decoration:none">
<img class="logo" src="/FinalProject/img/AnnixWhite.png">
</a>



  <a class="active" href="#home">
  <span class="material-icons">
home
</span> Dashboard</a>



  <a href="#news"> 
  <span class="material-icons">
chat
</span>Chat Room</a>
  <a href="#contact">
  <span class="material-icons">
person
</span>
Annix</a>
  <a href="#about"> <span class="material-icons">
psychology
</span>Brain</a>
</div>

<!-- Page content -->
<div class="content">
<div class="greeting"><?php echo  'Hello '  . $_SESSION['username'] ?></div>
</div>
    
</body>
</html>