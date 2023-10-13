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
		$sql = "SELECT * FROM users"; 
		$result = mysqli_query($conn, $sql); 
		echo "<table border='1'>"; 
		echo "<tr>"; 
		echo "<th>name</th><th>email</th><th>password</th><th>mobile</th><th>address</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 
				 echo "<td>" . $row['Name'] . "</td>"; 
                 echo "<td>" . $row['Email'] . "</td>"; 
				 echo "<td>" . $row['Password'] . "</td>"; 
				 echo "<td>" . $row['Mobile'] . "</td>"; 
				 echo "<td>" . $row['Address'] . "</td>"; 
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