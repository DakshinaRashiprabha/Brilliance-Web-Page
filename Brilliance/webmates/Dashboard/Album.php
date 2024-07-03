<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_Name = "studio";

//Create connection
$conn = mysqli_connect($servername , $username , $password , $database_Name);

//Check connection
if (!$conn){
	die("Connection Failed: " . mysqli_connect_error());
}
	


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if files were uploaded
    if (isset($_FILES['fileInputControl'])) {
        $uploadDir = 'uploads/photos/';

        // Create the directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Move uploaded files
        foreach ($_FILES['fileInputControl']['tmp_name'] as $index => $tmpName) {
            $originalName = $_FILES['fileInputControl']['name'][$index];
            $destination = $uploadDir . $originalName;

            move_uploaded_file($tmpName, $destination);
        }

        echo "Photos uploaded successfully!";
    } else {
        echo "No files were uploaded.";
    }
}
//Close the connection
$conn->close();
?>
