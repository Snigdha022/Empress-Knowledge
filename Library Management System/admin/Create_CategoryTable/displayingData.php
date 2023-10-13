<!DOCTYPE html>
<html>
<body>
	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "CSE3100"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "SELECT * FROM category"; 
		$result = mysqli_query($conn, $sql); 
		echo "<table border='1'>"; 
		echo "<tr>"; 
		echo "<th>cat_id</th><th>cat_name</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['Cat_ID'] . "</td>"; 
                 echo "<td>" . $row['Cat_Name'] . "</td>"; 
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>

</body>
</html>