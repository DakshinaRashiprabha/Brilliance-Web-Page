<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <h1>Event</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>location</th>
                <th>Date</th>
                <th>Time_From</th>
                <th>Time_To</th>
            </tr>
        </thead>
        <tbody>
            <?php

                require_once('connection.php');
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "studio package";

                //create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                //check connection
                if($conn->connect_error){
                    die("Connection failed: " . $conn->connect_error);
                }

                //read all row from database table
                $sql = "SELECT * FROM event1";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: " . $conn->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["ID"] . "</td>
                        <td>" . $row["fName"] . "</td>
                        <td>" . $row["location"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["timefrom"] . "</td>
                        <td>" . $row["timeto"] . "</td>
                        <td>
                            <a href='update.php'>Update</a>
                            <a href='Delete.php'>Delete</a>
                        </td>
                    </tr>";
                }
                //delete row
                    


            ?>

        </tbody>
    </table>
</body>
</html>