<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studio package";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['record_id'])) {
        $recordId = $_POST['record_id'];
        
        // Perform delete query
        $sql = "DELETE FROM event1 WHERE id = '$recordId'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>Date</th>
        <th>Time From</th>
        <th>Time To</th>
        <th>Action</th>
    </tr>
    <?php
    // Fetch data from the database and display it in rows
    // Loop through the records
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['fName'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['timefrom'] . "</td>";
        echo "<td>" . $row['timeto'] . "</td>";
        echo "<td><form method='POST' action='Delete.php'>
                  <input type='hidden' name='record_id' value='" . $row['id'] . "'>
                  <button type='submit'>Delete</button>
              </form></td>";
        echo "</tr>";
    }
}

    
    ?>
</table>
</body>
</html>

