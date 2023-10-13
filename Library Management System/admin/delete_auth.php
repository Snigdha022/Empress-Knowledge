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
        

		
        $query = "DELETE from authors  where author_id=$_GET[authid]"; 	
        $query_run=mysqli_query($conn, $query);	
        ?>
       
       <script type="text/javascript">
       alert("Author Deleted Successfully!!")
       window.location.href="manage_auth.php" 
       </script>
       <?php
		
        ?>