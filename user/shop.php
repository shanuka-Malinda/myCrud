<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\shop.css">
    <title>Shop</title>
    <style>
       body{
        background: url("assets/763212.jpg");
      } 
      .main{
        margin-top: 30px;
      }
    </style>
</head>
<body>
<?php $activePage = 'shop'; ?>

<div class="wrapper">

        <div class="header">
          <?php   include 'components\nav.php'; ?>               
        </div>
        <div class="main">
        <?php include 'components\itemCard.php';?>  
        </div>
        <div class="footer">
        <?php   include 'components\footer.php'; ?>
        </div>
    </div>
    
</body>
</html>