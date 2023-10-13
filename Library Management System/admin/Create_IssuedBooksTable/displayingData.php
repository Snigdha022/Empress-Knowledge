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
		$sql = "SELECT * FROM issued_books"; 
		$result = mysqli_query($conn, $sql); 
		echo "<table border='1'>"; 
		echo "<tr>"; 
		echo "<th>s_no</th><th>book_no</th><th>book_name</th><th>book_author</th><th>student_id</th><th>statuss</th><th>issue_date</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 
				 echo "<td>" . $row['s_no'] . "</td>"; 
                 echo "<td>" . $row['book_no'] . "</td>"; 
				 echo "<td>" . $row['book_name'] . "</td>"; 
				 echo "<td>" . $row['book_author'] . "</td>"; 
				 echo "<td>" . $row['student_id'] . "</td>";
				 echo "<td>" . $row['statuss'] . "</td>";
				 echo "<td>" . $row['issue_date'] . "</td>"; 
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