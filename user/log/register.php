<?php
session_start();

include 'config.php';

$err="";
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
            header("Location:uProfile.php");
            exit();
        } else {
          $err="Invalid password";
           // echo "Invalid password";
        }
    } else {
      $err="User not found";
       // echo "User not found";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
      .frm{
        display: flex;
        margin-top: 40px;
        /* background:rgba(0, 0, 0, 0.7); */
        width: 1000px;
        height: 600px;
        position: relative;
        border-top-left-radius: 100px;
        border-bottom-right-radius: 100px;
      }

      /***************Login****************/
      .lg{
        background:rgba(0, 0, 0, 0.5);
        display: flex;
        width: 500px;
        flex-direction: column;
        justify-content: center; 
        align-items: center; 
        /* background-color: red; */
        border-top-left-radius: 100px;
        color: white;
      }
      .lg form{
        display: flex;
        flex-direction: column;
        align-items: center;
       
      }
      .lg form input{
        margin-top: 20px;
        background: transparent;
        outline: none;
        border: none;
        border-bottom: 1px solid white;
        text-align: center;
        color: white;
      }
      .lg form input[type='submit']{
        border: none;
        background-color: blue;
        border-radius: 8px;
        color: white;
        padding: 5px;
        width: 100px;
        height: 30px;
        cursor: pointer;
        animation-name: logBtn;
        animation-duration: 1s;
      }
      .lg form input[type='submit']:hover{
        background:rgba(0, 0, 0, 0.7);
        border: 1px solid white;
      }
      
      .lg h2{
        margin: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      .lg p{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: seagreen;
      }
      /********************register************************ */
      .ds{
        display: flex;
        flex-direction: column;
        border-bottom-right-radius: 100px;
        width: 500px;
        justify-content: center;
        align-items: center;
        background:rgba(0, 0, 0, 0.7);
      }
      .ds form{
        /* background-color: yellow; */
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      #name{
        margin-top: 10px;
        display: flex;
        flex-direction: row;
      }
      .ds form input{
        margin: 10px;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        text-align: center;
        outline: none;
        color:white;
      }
      .ds form input[type='submit']{
        border: none;
        background-color: blue;
        border-radius: 8px;
        color: white;
        padding: 5px;
        width: 100px;
        height: 30px;
        cursor: pointer;
      }
      .ds form input[type='submit']:hover{
        background:rgba(0, 0, 0, 0.7);
        border: 1px solid white;
      }
      .ds form input[type='file']{
        border: none;
        position: relative;
        left: 0;
        width: 150px;
      }
      .ds form textarea{
        background: transparent;
        width: 250px;
        margin: 10px;
        border: none;
        border-bottom: 1px solid white;
        text-align: center;
        outline: none;
      }
      .ds h1{
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      .ds label{
        color: #009DCC;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

      input::placeholder{
        color: white;
       }
       .errMsg{
        color: darkorange;
        margin-top: 5px;
       }
    </style>
</head>
<body>
    
<div class="frm">
     
    <div class="lg"> 
        <img src="assets/logo1.png" alt="Logo" width="150">
         <h2>Login</h2>
         <p>I have an already created account</p>

         <label class="errMsg">
          <?php echo "$err";?>
      </label>

         <form action="" method="post">
            <input type="text" name="username" id="uname" placeholder="Username" required>
            <input type="password" name="password" id="pswd" placeholder="Password" required>
            <input type="submit" value="Login">
         </form>
    </div>

    <div class="ds">
    
       <h1>Create Your Account !</h1>

       <form action="log\reg.php" method="post" enctype="multipart/form-data">
       
           <div id="name">    
              <input type="text" name="firstName" placeholder="First Name" required><br>
              <input type="text" name="lastName" placeholder="Last Name" required><br>
           </div>

             
            <input type="text" name="username" placeholder="Username" required><br>

             
            <input type="email" name="email" placeholder="Email" required><br>

            
            <input type="text" name="address" placeholder="Address" required  > <br>

             
            <input type="text" name="contactNo" placeholder="Contact No" maxlength="10" minlength="10" required><br>

             
            <input type="password" name="password" placeholder="Password" minlength="6" required><br>

            <label for="userImage">Select Image</label>
            <input type="file" name="userImage" accept="image/*" required><br>

            <input type="submit" value="Register">
       </form>
    </div>
</div>
</body>
</html>
