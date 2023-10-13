<?php
  
  $servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "CSE3100"; 
		
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 

        $query ="UPDATE  admins set Name='$_POST[name]', Email='$_POST[email]', Mobile=$_POST[mobile], Address='$_POST[address]' WHERE Email='$_POST[email]' "; 	
        $query_run=mysqli_query($conn, $query);

?>
<script type="text/javascript">
   alert("Updated successfully!!")
   window.location.href="admin_dashboard.php" 
</script>