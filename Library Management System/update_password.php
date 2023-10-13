<?php
  session_start();
  $servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "CSE3100"; 
		
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
        $password1="";

        $query = "SELECT * FROM users WHERE Email= '$_SESSION[email]'"; 
       // $query = "SELECT * FROM users WHERE Email= '$_POST[email]'"; 
        $query_run=mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc( $query_run)){

            $password1=$row['password'];

        }
        if($password1==$_POST['old_password']){
            $query="UPDATE USERS SET password='$_POST[new_password]' WHERE Email='$_SESSION[email]'";
            $query_run = mysqli_query($conn,$query);
        }
    

?>
<script type="text/javascript">
   alert("Updated successfully!!")
   window.location.href="user_dashboard.php" 
</script>