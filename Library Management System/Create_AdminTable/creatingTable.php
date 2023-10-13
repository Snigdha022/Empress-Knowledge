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
		$sql = "CREATE TABLE admins 
		( 
			id int, 
			name varchar(255), 
			email varchar(255),
            password varchar(255),
            mobile int,
            address varchar(255)			
		)"; 

		if (mysqli_query($conn, $sql)) 
		{ 
			echo "Table admins created successfully"; 
		} 
		else 
		{ 
			echo "Error creating table: " . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>

</body>
</html>