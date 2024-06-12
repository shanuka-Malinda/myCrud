<?php
include 'config.php';

// Check if itemId is set in the URL
if(isset($_GET['user_id'])){
    // Get the itemId from the URL
    $id = $_GET['user_id'];

    // Prepare the SQL statement to delete the item
    $sql = "DELETE FROM users WHERE user_id = $id";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Item ID not set in the URL";
}

// Redirect back to the table.php page
header("location:index.php");
exit;
?>
