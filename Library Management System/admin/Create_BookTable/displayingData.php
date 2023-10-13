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
		$sql = "SELECT * FROM books"; 
		$result = mysqli_query($conn, $sql); 
		echo "<table border='1'>"; 
		echo "<tr>"; 
		echo "<th>book_id</th><th>book_name</th><th>author_name</th><th>cat_name</th><th>book_no</th><th>book_price</th><th>author_id</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 
				 echo "<td>" . $row['book_id'] . "</td>"; 
                 echo "<td>" . $row['book_name'] . "</td>"; 
				 echo "<td>" . $row['author_name'] . "</td>"; 
				 echo "<td>" . $row['cat_name'] . "</td>"; 
				 echo "<td>" . $row['book_no'] . "</td>";
				 echo "<td>" . $row['book_price'] . "</td>"; 
				 echo "<td>" . $row['author_id'] . "</td>"; 
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