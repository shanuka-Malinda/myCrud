<?php
session_start();

include 'config.php';
// Process the login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row["password"])) {
            // Store user data in the session
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["firstName"] = $row["first_name"];
            $_SESSION["lastName"] = $row["last_name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["address"] = $row["address"];
            $_SESSION["contact_no"] = $row["contact_no"];
            $_SESSION["user_image"] = "uploads/" . $row["user_image"];
            // Redirect to the user profile page
            header("Location:user\uProfile.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="main">
    <div class="img">
   <img src="\seaFood\user\assets\w(1).jpg" alt="Fishing image">
    </div>

    <div class="form">
        <h1>Login</h1>
     <form action="" method="post">
        <input type="text" name="username" id="input" placeholder="Username" required>
        <input type="password" name="password" id="input" placeholder="Password" required minlength="6">
        <input type="submit" value="Login">
     </form>
     <a href="#">Register With Us!</a>
    </div>

  </div>  

  <script>
        function validateForm() {
            // Client-side validation using JavaScript
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "") {
                alert("Username is required.");
                return false;
            }

            if (password === "" && password>=password.length) {
                alert("Password is required.");
                return false;
            }

            // If all validations pass, the form will be submitted
            return true;
        }
    </script>


</body>
</html>