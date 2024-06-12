<?php
include 'config.php';

// Check if itemId is set in the URL
if(isset($_GET['itemId'])){
    $id = $_GET['itemId'];

    // Fetch the item details from the database
    $sql = "SELECT * FROM items WHERE itemId = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // You can use $row to populate the form fields for editing
        $itemName = $row['name'];
        $itemOffer = $row['offer'];
        $itemPrice = $row['price'];
        $itemType = $row['type'];
    } else {
        echo "Item not found";
        exit;
    }
} else {
    echo "Item ID not set in the URL";
    exit;
}

// Handle the form submission for editing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated values from the form
    $newName = $_POST['newName'];
    $newOffer = $_POST['newOffer'];
    $newPrice = $_POST['newPrice'];
    $newType = $_POST['newType'];

    // Update the item details in the database
    $updateSql = "UPDATE items SET name='$newName', offer='$newOffer', price='$newPrice', type='$newType' WHERE itemId = $id";

    if ($conn->query($updateSql) === TRUE) {
        echo "Record updated successfully";
        header("location:index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background: url(assets/fish.jpg)no-repeat;
            background-size: cover;

        }
        .popup-container {
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            /* justify-content: center; */
            width: 400px;
            height: 400px;
            /* padding: 20px; */
            border: 1px solid #ccc;
            background: rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-100%, -50%);
        }
        .popup-container form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .popup-container form input[type="submit"]{
            width: 100px;
            height: 40px;
            background-color: #004080;
            border: none;
            border-radius: 7px;
            color: white;
        }
        .popup-container form input{
            height: 25px;
            width: 300px;
             
            outline: none;
            border: none;
            border-bottom: 1px solid black;
            padding-left: 10px;
            background:transparent;
        }
        .popup-container form input[type="submit"]:hover{
            background-color: #003380;
            cursor: pointer;
        }
        .popup-container h2{
            width: 100%;
            height: 50px;
            background-color: #003380;
            text-align: center;
            color: white;
            padding-top: 20px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;

        }
        .popup-container label{
            margin-top: 5px;
        }
    </style>
</head>
<body>

 
    <div class="popup-container">
        <h2>Update Item</h2>
        <form method="post" action="">
            <label for="newName">Name:</label>
            <input type="text" name="newName" value="<?php echo $itemName; ?>" required><br>

            <label for="newOffer">Offer:</label>
            <input type="text" name="newOffer" value="<?php echo $itemOffer; ?>"><br>

            <label for="newPrice">Price:</label>
            <input type="text" name="newPrice" value="<?php echo $itemPrice; ?>" required><br>

            <label for="newType">Type:</label>
            <input type="text" name="newType" value="<?php echo $itemType; ?>"><br>

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
