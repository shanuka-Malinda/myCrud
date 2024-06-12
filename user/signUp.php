<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css\home.css"> -->
    <title>Sign Up!</title>
    <style>
     *{
    margin: 0;
}
body{
    background: url("assets/seaFood2.jpg")no-repeat;
    background-size: cover;
}
.main{
    height: 100vh;
    /* background:rgba(0, 0, 0, 0.4); */
    display: flex;
    justify-content: center;
     
}
 </style>
</head>
<body>
<div class="wrapper">
        <div class="header">
          <?php   include 'components\nav.php'; ?>               
        </div>
        <div class="main"> 
                <?php include 'log\register.php';?>
           
        </div>
        <div class="footer">
        <?php   include 'components\footer.php'; ?>
        </div>
    </div>

    
</body>
</html>