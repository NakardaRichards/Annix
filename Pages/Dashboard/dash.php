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
    
</head>
<body>

<a href="./landing.php" style="text-decoration:none">
<img class="logo" src="/FinalProject/img/AnnixCyanx.png">
</a>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">

</div>
    
</body>
</html>