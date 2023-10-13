
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
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 

		$query = "INSERT INTO users( Name, Email, Password, Mobile, Address) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')"; 
		if (mysqli_query($conn, $query)) 
		{ 
			echo "New record created successfully"; 
		} 
		else 
		{ 
			echo "Error: " . $query . "<br>" . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>
	
	<script type="text/javascript">
   alert("Registration successful...You may login now.")
   window.location.href="index.php" 
</script>
</body>
</html>