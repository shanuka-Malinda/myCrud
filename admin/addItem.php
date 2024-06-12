

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\addItem.css">
    <title>Administration</title>
    <style>
    .container h2{
           font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .container label{
        font-family: Arial, Helvetica, sans-serif;
    }

    </style>
</head>
<body>
<div class="container">
        <h2>Add Item</h2><br><br>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <!-- <label for="name">Name:</label> -->
            <input type="text" name="name" required placeholder="Name">
              <br><br>
            <!-- <label for="type">Type:</label> -->
            <input type="text" name="type" required placeholder="Type">
              <br><br>
            <!-- <label for="price">Price:</label> -->
            <input type="text" name="price" required placeholder="Price">
              <br><br>
            <!-- <label for="offer">Offer:</label> -->
            <input type="text" name="offer" placeholder="Offer">
               <br><br>
            <label for="image"> Select Image (less than 2MB)....</label>
            <input type="file" name="image" accept="image/*" required  >

            <button type="submit">Add Item</button>
        </form>
    </div>
</body>
</html>