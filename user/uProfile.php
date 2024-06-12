<?php
session_start();
         


if(empty($_SESSION["username"])){
  $username="My Account";
}
else{
  $username = $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $username ; ?></title>

    <style>
      body{
        margin: 0;
        background: url('assets/beachBoart.jpg')no-repeat;
      }
    </style>
</head>
<body>
<div class="wrapper">
        <div class="header">
          <?php   include 'components\nav.php'; ?>               
        </div>
        <div class="main">
        <?php 
        // session_start();
          
         include 'log\profile.php';
        ?>
        </div>
        <div class="footer">
        <?php   include 'components\footer.php'; ?>
        </div>
    </div>
</body>
</html>