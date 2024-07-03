<?php
if (isset($_GET['id'])) {
    $id_to_delete = $_GET['id'];
    
    // Add database connection code here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin_brilliance";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare and execute the delete query
    $sql = "DELETE FROM event1 WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_to_delete);
    
    if ($stmt->execute()) {
        echo "Record with ID $id_to_delete has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "No ID specified for deletion.";
}
?>
