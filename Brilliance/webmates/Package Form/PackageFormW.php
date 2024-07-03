<?php
// Replace these variables with your actual database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studio packagew";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $customerName = $_POST["CustomerName"];
    $asize = $_POST["asize"];
    $apage = $_POST["apage"];
    $alamination = $_POST["alamination"];
    $acasing = $_POST["acasing"];
    $esize = $_POST["esize"];
    $etype = $_POST["etype"];
    $eQuantity = $_POST["eQuantity"];
    $tcsize = $_POST["tcsize"];
    $tcQuantity = $_POST["tcQuantity"];

    // Insert the data into the database
    $sql = "INSERT INTO wed_package (CustomerName, ASize, APage, ALamination, Acasing, ESize, EType, EQuantity, TCSize, TCQuantity)
            VALUES ('$customerName', '$asize', '$apage', '$alamination', '$acasing', '$esize', '$etype', '$eQuantity', '$tcsize', '$tcQuantity')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>