<!DOCTYPE html>
<html>
<head>
   <title>Admin Login</title>
   <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
	  #side_bar{
		  background-color:#ddffd6;
		  padding:50px;
		  width:300px;
		  height : 450px;
	</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b4f2a7">
    <div class="container-fluid">
	   <div class="navbar-header">
	   
	   <a class="navbar-brand" href="index.php" style="color: #211308">Library Management Sytem(LMS)</a>
	   
	   </div>
	   <ul class="nav navbar-nav navbar-right"></ul>
	   <li class="nav-link">
	     <a class="nav-link" href="admindex.php" style="color: #211308">Admin Login</a>
	   </li>
	   <li class="nav-link">
	     <a class="nav-link" href="../index.php" style="color: #211308">User Login</a>
	   </li>
	   <li class="nav-link">
	     <a class="nav-link" href="../signup.php" style="color: #211308">Register</a>
	   </li>
	</div>   
  </nav><br>
  <span><marquee>This is Library Management Sytem. Library opens at 8.00AM and closes at 6.00PM</marquee></span><br><br>
   <div class="row">
    <div class="col-md-4" id="side_bar">
	 <h5>Library Timing</h5>
	   <ul>
	     <li>Opening Time: 8:00AM</li>
		 <li>Closing Time: 8:00AM</li>
		 <li>Wednesday Off</li>
	   </ul>
	   <h5>What we provide?</h5>
	   <ul>
	     <li>Free wifi</li>
		 <li>Newspaper</li>
		 <li>Peaceful Environment</li>
		 <li>Pure Water</li>
		 <li>Discussion Room</li>
	   </ul>
	</div>
	<div class="col-md-8" id="main_content">
    <center>
	 <h3>Admin Login form</h3>
	</center>
	<form action="" method="post">
	 
	 <div class="form-group">
	  <label for="name">Email:</label>
	  <input type="text" name="email" class="form-control required">
	 </div>
	 <div class="form-group">
	  <label for="name">Password:</label>
	  <input type="password" name="password" class="form-control required">
	 </div>
	 <br>
	 <button type="submit" name="login"class="btn btn-outline-secondary" style="background-color: #b4f2a7">Login</button>
	</form>
	<?php 
	session_start();
	  if(isset($_POST['login'])){
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

		
        $query = "SELECT * FROM admins WHERE Email= '$_POST[email]'"; 	
        $query_run=mysqli_query($conn, $query);		
		
		
		 
			
			while($row = mysqli_fetch_assoc( $query_run)){
		   if($row['email']==$_POST['email']){
			   if($row['password']==$_POST['password']){
				   $_SESSION['name']=$row['name'];
				   $_SESSION['email']=$row['email'];
				   header("Location:admin_dashboard.php");
			   }
				else{
					?>
					<br><br><center><span class="alert-danger">Wrong Password</span></center>
					<?php
				}
		  
		   }
		   
		  
		  
	  }
		
		
		
	  mysqli_close($conn); 
	  }
	  
	
	
	?>
   </div>
   
    
   
   
   </div>

</body>
</html>