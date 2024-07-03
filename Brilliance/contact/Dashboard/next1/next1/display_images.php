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

// Delete image
if (isset($_GET['delete'])) {
    $image_id = $_GET['delete'];
    $delete_query = "DELETE FROM images WHERE id = $image_id";
    if ($conn->query($delete_query) === TRUE) {
        unlink($_GET['path']); // Delete the image file from the server
        header("Location: display_images.php"); // Redirect after deleting
    } else {
        echo "Error deleting image: " . $conn->error;
    }
}

// Retrieve image information from the database
$select_query = "SELECT * FROM images";
$result = $conn->query($select_query);

// Email sending
if (isset($_POST['send'])) {
    $selected_ids = $_POST['selected_ids'];
    $selected_names = $_POST['selected_names'];
    $to = 'dilshansamaranayaka0301@gmail.com'; // Change this to the recipient's email address
    $subject = 'Selected Images';
    $message = "Selected Image IDs:\n" . implode(', ', $selected_ids) . "\n\nSelected Image Names:\n" . implode(', ', $selected_names);
    mail($to, $subject, $message);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Images</title>
    <style>
        *{
            margin:0;
        }
        h2 {
            text-align:center;
            margin:20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
        .sendbtn{
            text-align:center;
            
            justify-content:center;
            
        }
        .sendbtn input{
            background-color:black;
            color:white;
            border-radius:30px;
            cursor:pointer;
            padding:5px 20px 5px 20px;
        }
    </style>
</head>
<body>
    <h2>Displaying Uploaded Images</h2>
    <form method="post" action="">
        <table>
            <tr>
                <th>Select</th>
                <th>Image</th>
                <th>Image Name</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $image_id = $row['id'];
                    $image_path = $row['image_path'];
                    $image_name = $row['image_name'];
                    ?>
                    <tr>
                        <td><input type="checkbox" name="selected_ids[]" value="<?php echo $image_id; ?>"><input type="hidden" name="selected_names[]" value="<?php echo $image_name; ?>"></td>
                        <td><img src="<?php echo $image_path; ?>" alt="<?php echo $image_name; ?>"></td>
                        <td><?php echo $image_name; ?></td>
                        <td>
                            <a href="?delete=<?php echo $image_id; ?>&path=<?php echo $image_path; ?>" onclick="return confirm('Are you sure you want to delete this image?')">Delete</a>
                            
                            
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='4'>No images found.</td></tr>";
            }
            ?>
        </table>
        <br>
        <div class="sendbtn">
        <input  type="submit" name="send" value="Send">
        </div>
        <h3><a href = "http://localhost/Brilliance/contact/PachageFormLink.php" >Next</a></h3>
    </form>
</body>
</html>
