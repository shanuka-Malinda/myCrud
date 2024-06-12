<?php
 include 'config.php';

// Process form data and insert into database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $price = $_POST["price"];
    $offer = $_POST["offer"];

    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    $sql = "INSERT INTO items (name, type, price, offer, image) VALUES ('$name', '$type', '$price', '$offer', '$image')";

    if ($conn->query($sql) === TRUE) {
       // echo "Item added successfully!";
       header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

 














?>


