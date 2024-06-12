<?php

include 'config.php';

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $contactNo = $_POST["contactNo"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Check if a file was uploaded
    if (isset($_FILES["userImage"]) && $_FILES["userImage"]["error"] == 0) {
        // Read the image file into a variable
        $imageData = file_get_contents($_FILES["userImage"]["tmp_name"]);
        // Convert the binary data into a base64-encoded string
        $base64Image = base64_encode($imageData);
    } else {
        // Set a default image or handle the case where no image is provided
        $base64Image = ''; // Set a default value or handle the case accordingly
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (first_name, last_name, username, email, address, contact_no, password, user_image)
            VALUES ('$firstName', '$lastName', '$username', '$email', '$address', '$contactNo', '$password', '$base64Image')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("location: ../signUp.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
