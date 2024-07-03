<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studio package";

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $fName = $_POST["fName"];
        $location = $_POST["location"];
        $date = $_POST["date"];
        $timefrom = $_POST["timefrom"];
        $timeto = $_POST["timeto"];



    /*check if data null restrict 

    if (empty($fname) || empty($age) || empty($address)) {
        echo "All fields are required.";
    } else {
        // Perform database insertion here
    }
    */

	
	// Insert the data into the database
    $sql = "INSERT INTO event1(fName, location,date, timefrom, timeto)
            VALUES ('$fName', '$location', '$date','$timefrom','$timeto')";
    

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, redirect to another page
    header("Location: test1.php");
    exit(); // Make sure to exit to prevent further execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*			
if ($conn->query($sql) === TRUE) {
		echo "Data inserted successfully.";
   } 
	else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
   */
}


// Close the database connection
$conn->close();

?>