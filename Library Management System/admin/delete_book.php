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
        

		
        $query = "DELETE from books  where book_no=$_GET[bookno]"; 	
        $query_run=mysqli_query($conn, $query);	
        ?>
       
       <script type="text/javascript">
       alert("Book Deleted Successfully!!")
       window.location.href="manage_book.php" 
       </script>
       <?php
		
        ?>