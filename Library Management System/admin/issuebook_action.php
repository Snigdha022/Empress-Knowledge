
<!DOCTYPE html>
<html>
<body>
	<?php 
    if(isset($_POST['issue_book'])){
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

		$query = "INSERT INTO issued_books( Book_No, Book_Name, Book_Author, Student_ID, Statuss, Issue_Date) VALUES ($_POST[book_no],'$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')"; 	
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
