<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="components\itemCard.css">
    <title>Card</title>
    <style>
 
.card{
    width: 250px;
    height: 395px;
    margin: 5px;
    border-radius: 10px;
    border: none;
    display: flex;
    flex-direction: column;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    /* justify-content: center; */
    align-items: center;
    background: rgba(1, 1, 1, 0.5);
    color: white;
}
.card .img{
    width: 250px;
    height: 250px;
    border-radius: 10px;
    /* border: 1px solid black; */
}
.card .img img{
    width: 250px;
    height: 250px;
    border-radius: 10px;
}
.btn button{
    width: 100px;
    height: 30px;
    border: none;
    border-radius: 5px;
    color: white;
    background-color: #0059B3;
}
.btn button:hover{
    cursor: pointer;
}
.details{
    margin: 5px;
}
.offer{
    background-color: #FF0000;
    padding: 1px;
    border-radius: 3px;
}
    </style>
</head>
<body>
<?php
 include 'config.php';
// Fetch items from the database
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

// Display items in cards
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
      
         <div class="card">
         <h3><?php echo $row['name']; ?></h3>
         <p class="offer"><?php echo $row['offer']; ?></p>
    <div class="img">
       <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="<?php echo $row['name']; ?>">
    </div>
    <div class="details">
        <!-- <h3><?php echo $row['name']; ?></h3> -->
        <p><?php echo $row['type']; ?></p>
        <p><?php echo $row['price']; ?></p>
        <p><?php //echo $row['offer']; ?>Per kilo</p>
    </div>
    <div class="btn">
        <button>Add to Cart</button>
        <button>Buy</button>
    </div>
</div>


        <?php
    }
} else {
    echo "No items found";
}

$conn->close();
?>

 


</body>
</html>