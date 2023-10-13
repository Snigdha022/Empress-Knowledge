
<!DOCTYPE html>
<html>
<body>
	<?php 
    if(isset($_POST['add_book'])){
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

		$query = "INSERT INTO books( Book_Name, Author_Name, Cat_Name, Book_No, Book_Price) VALUES ('$_POST[book_name]','$_POST[author_name]','$_POST[cat_name]',$_POST[book_no],$_POST[book_price])"; 	
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
   alert("New Book Added Successfully!")
   window.location.href="admin_dashboard.php" 
</script>
</body>
</html>
