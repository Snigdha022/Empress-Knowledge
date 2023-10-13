<html>
<head>
	<title>	
	</title>
</head>
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

		// sql to create table 
		$sql = "CREATE TABLE issued_books 
		( 
			s_no int,
			book_no int, 
			book_name varchar(255), 
			book_author varchar(255),
			student_id int,
            statuss int,
            issue_date date			
		)"; 

		if (mysqli_query($conn, $sql)) 
		{ 
			echo "Table books created successfully"; 
		} 
		else 
		{ 
			echo "Error creating table: " . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>

</body>
</html>