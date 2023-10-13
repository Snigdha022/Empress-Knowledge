<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-5.1.3-dist/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
	  #side_bar{
		  background-color:#fce3ed;
		  padding:50px;
		  width:300px;
		  height : 450px;
	  }
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5c9da" >
    <div class="container-fluid">
	   <div class="navbar-header">
	   
	   <a class="navbar-brand" href="index.php" <font style="color:#324a49" >Library Management Sytem(LMS)</font></a>
	   
	   </div>
	   <ul class="nav navbar-nav navbar-right"></ul>
	   <li class="nav-link">
	     <a class="nav-link" href="admin/admindex.php"style="color: #324a49">Admin Login</a>
	   </li>
	   <li class="nav-link">
	     <a class="nav-link" href="index.php" style="color:#324a49">User Login</a>
	   </li>
	   <li class="nav-link">
	     <a class="nav-link" href="index.php" style="color: #324a49">Register</a>
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
	 <h3>User Registration form</h3>
	</center>
	<form action="register.php" method="post">
	 <div class="form-group">
	  <label for="name">Full Name:</label>
	  <input type="text" name="name" class="form-control required">
	 </div>
	 <div class="form-group">
	  <label for="name">Email:</label>
	  <input type="text" name="email" class="form-control required">
	 </div>
	 <div class="form-group">
	  <label for="name">Password:</label>
	  <input type="password" name="password" class="form-control required">
	 </div>
	 <div class="form-group">
	  <label for="name">Mobile Number:</label>
	  <input type="text" name="mobile" class="form-control required">
	 </div>
	 <div class="form-group">
	  <label for="name">Address:</label>
	  <textarea rows="3" cols="40" class="form-control" name="address"></textarea>
	 </div><br>
	 <button type="submit" class="btn btn-outline-secondary" style="background-color: #f5c9da">Register</button>
	
	  
	</form>
   </div>
   
    
   
   
   </div>

</body>
</html>