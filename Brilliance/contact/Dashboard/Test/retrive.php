<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "studio package";



	// Create Connection 
	
	$conn = new mysqli ($servername, $username, $password, $dbname);

	//Check connection

	if ($conn->connect_error){
		die("connection failed:" .$conn->connect_error);
	
	}



	//select * data from table

	$sql = "select * from event1";
	$result = $conn->query($sql);
	

	if ($result->num_rows > 0){
	// output data of each row
		while ($row = $result->fetch_assoc()){
			echo $row ["ID"]. "".$row ["fName"]. "".$row["location"]. " ".$row["date"]. " ".$row["timefrom"]. " ".$row["timeto"]. "<br>" ;
		}
	
	}else{
		echo "0 result" ;
	}




/*

	// Update table 

	$sql1 = " UPDATE student SET StudentID = 'S012' WHERE StudentID = 'S003'";
	
		if ($conn->query($sql1)==TRUE){
			echo "Record updated successfully";
		}else{
			echo "Error updating record: .$conn->error";
		}

	

*/



$conn->close();
?>


