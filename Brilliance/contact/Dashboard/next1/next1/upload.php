<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studio package";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Image upload handling
if(isset($_POST["submit"])) {
    $target_dir = "uploads/";  // Directory to store images
    $image_name = basename($_FILES["image"]["name"]);
    $target_path = $target_dir . $image_name;
    
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        // Insert image information into database
        $insert_query = "INSERT INTO images (image_name, image_path) VALUES ('$image_name', '$target_path')";
        
        if($conn->query($insert_query) === TRUE) {



            
            echo "Image uploaded and inserted successfully.";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading image.";
    }
}

$conn->close();
?>
