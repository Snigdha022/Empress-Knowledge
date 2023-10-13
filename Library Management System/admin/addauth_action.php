
<!DOCTYPE html>
<html>
<body>
	<?php 
    if(isset($_POST['add_auth'])){
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "CSE3100"; 
		
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
            
		$query = "INSERT INTO authors(Author_Name) VALUES ('$_POST[author_name]')"; 	
		if (mysqli_query($conn, $query)) 
		{ 
			echo "New record created successfully"; 
		} 
		else 
		{ 
			echo "Error: " . $query . "<br>" . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
    }
	?>
	
	<script type="text/javascript">
   alert("New Author Added Successfully!")
   window.location.href="admin_dashboard.php" 
</script>
</body>
</html>
