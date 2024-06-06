<?php
include('connection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $con->prepare("DELETE FROM car_details WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    // Execute the statement
    if($stmt->execute()){
        header('Location: admin.php');
        exit();
    } else {
        die("Error deleting record: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
} else {
    die("ID not specified.");
}
?>
