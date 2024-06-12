<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <style>
        .main{
            height: 90vh;
        }
        .del{
            margin:100px;
            margin-left: 100px;
            width:400px;
            height: 500px;
            background: rgba(0, 0, 0, 0.5);
            /* background-color: green; */
            display: flex;
            flex-direction: column;
            /* border:1px solid black; */
            border-radius: 10px;
            align-items: center;
        }
        .del .d1{
            margin-left: 20px;
            display: flex;
            align-items: center;
            position: relative;
            top:-30px;
            left: -10px;
            /* justify-content: center; */
        }
         
     .del img{
        width: 90px;
        height: 90px;
        border-radius: 45px;
        background-color: darkgray;
     }
     .del a{
        width: 100px;
        text-decoration: none;
        background-color: rebeccapurple;
        color: white;
        padding: 10px;
        text-align: center;
       
        border-radius: 10px;
     }
     .un{
        margin-left: 10px;
        margin-top: 45px;
        color: whitesmoke;
     }
     h2{
        color: white;
     }
    </style>
</head>
<body>
<?php

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
   // header("Location: notLog.php");
  include 'notLog.php';
   echo " ";
    exit();
}

// Include the database configuration file
include 'config.php';

// Display user profile information
$userImage = $_SESSION["user_image"];
$userId = $_SESSION["user_id"];
$username = $_SESSION["username"];
$address = $_SESSION["address"];
$email = $_SESSION["email"];
$cNo = $_SESSION["contact_no"];
$fn = $_SESSION["firstName"];
$sn = $_SESSION["lastName"];
?>
<div class="main">
<div class="del">
       <div class="d1">
     <!-- <img src="data:image/jpeg;base64,<?php //echo base64_encode($userImage) ; ?>"   >       -->
     <img src="assets/user1.jpg" alt="">
     <h2 class="un"><?php echo "Welcome, $username !";?></h2>
      </div>
      
      <h2><?php echo " $fn $sn";?></h2>
       
     
     
     <h2><?php echo " $address ";?></h2>
     <h2><?php echo " $email ";?></h2>
     <h2><?php echo " $cNo ";?></h2>
     <br><a href='log\logout.php'>Logout</a>
</div>
</div>
</body>
</html>
