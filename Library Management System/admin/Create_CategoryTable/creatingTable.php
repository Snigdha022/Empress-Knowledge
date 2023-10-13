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
		$sql = "CREATE TABLE category 
		( 
			cat_id int, 
			cat_name varchar(255)
						
		)"; 

		if (mysqli_query($conn, $sql)) 
		{ 
			echo "Table category created successfully"; 
		} 
		else 
		{ 
			echo "Error creating table: " . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>

</body>
</html>