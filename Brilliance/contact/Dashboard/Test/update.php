<?php

require_once('connection.php');

// Check if the "id" parameter is present in the URL
if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    
    // Query to retrieve the data based on the provided "id"
    $sql = "SELECT * FROM formtest WHERE id = '$ID'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful and if a row was found
    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Store the retrieved data into variables
        $ID = $row['ID'];
        $name = $row['fName'];
        $location = $row['location'];
        $eventDate = $row['date'];
        $timeFrom  = $row['timefrom'];
        $timeTo  = $row['timeto'];

                    
        // Handle the case when no matching row is found
        echo "No matching record found.";
    }
} else {
    echo " ";
}


?>
  
<!DOCTYPE html>
<html>
<head>
    <style>
        <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:"times new roman";
            
        }
        body{
            background-position: center;
            background-size: cover;
            background-color: gray;
            min-height: 100vh;
            width:100%;
            
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;  
        }

    
        .form-box{
            position: relative;
            width: 400px;
            height: 550px;
            border:2px solid rgba(255,255,2550.5);
            border-radius: 20px;
            justify-content: center;
            align-items: center;
        }

        .form-box h1{
            color: #fff;
            text-align: center;
            font-size: 32px;
        }
        .form-box .input-box{
            position: relatives;
            margin: 30px;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .form-box .input-box input{
            width: 100%;
            
            background: transparent;
            border: none;
            outline: none;
            padding: 0 20px 0 5px;
            color: #fff;
            font-size: 16px;
        } 

        input::placeholder{
            color:#fff;
        }

    </style>
    </style>
</head>
<body>

<div class="container">
        <div class="form-box">
            <form action="test.php" method="POST" class="form">
                <h1>Events</h1>

                <div class="input-box">
                    <input type="varchar" placeholder="ID" id="id" name="id" required><br><br>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Full Name" id="fName" name="fName" required><br><br>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Location" id="loction" name="location" required><br><br>
                </div>

                <div class="input-box">
                    <input type="date" placeholder="Date" id="date" name="date" required> <br><br>
                </div>
                
                <div class="input-box">
                    <input type="time" placeholder="TimeFrom" id="timefrom" name="timefrom" required><br><br>
                </div>

                <div class="input-box">
                    <input type="time" placeholder="Timeto" id="timeto" name="timeto" required><br><br>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="submit" name="submit" value="SAVE">
   
            </form>
        </div>
    
    </div>
   
<?php

        if(isset($_POST['submit']))
        {
            //Get All the Values from Form
            $ID = $_POST["ID"];
            $name = $_POST["fName"];
            $location = $_POST["location"];
            $eventDate = $_POST["date"];
            $timeFrom = $_POST["timefrom"];
            $timeTo = $_POST["timeto"];

            //Update the Values
            $sql = "UPDATE help SET name='".$fName."', location='".$location."', date='".$date."', timefrom='".$timefrom."', timeto='".$timeto."' WHERE ID='$ID'";
            $result2= mysqli_query($conn,$sql);
            
           
        }

    ?>

</body>
</html>
