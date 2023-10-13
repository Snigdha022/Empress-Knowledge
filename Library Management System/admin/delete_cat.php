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
        

		
        $query = "DELETE from category  where cat_id=$_GET[cid]"; 	
        $query_run=mysqli_query($conn, $query);	
        ?>
       
       <script type="text/javascript">
       alert("Category Deleted Successfully!!")
       window.location.href="manage_cat.php" 
       </script>
       <?php
		
        ?>