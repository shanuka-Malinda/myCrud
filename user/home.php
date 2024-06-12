<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\home.css">
    <title>Home</title>
    <style>
      body{
    background: url("assets/home.jpg");
}
    </style>
</head>
<body>
<div class="wrapper">
        <div class="header">
          <?php   include 'components\nav.php'; ?>               
        </div>
        <div class="main">
        <?php include 'components\dep1.php';?>
        </div>
        <div class="footer">
        <?php   include 'components\footer.php'; ?>
        </div>
    </div>

    
</body>
</html>