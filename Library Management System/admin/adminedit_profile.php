<?php
  session_start();
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
        $name="";
        $email="";
        $mobile="";
        $address="";

		
        $query = "SELECT * FROM admins WHERE Email= '$_SESSION[email]'"; 	
        $query_run=mysqli_query($conn, $query);		
		
		
		 
			
			while($row = mysqli_fetch_assoc( $query_run)){
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $address=$row['address'];

            }
?>

<!DOCTYPE html>
<html>
<head>
   <title>Admin Dashboard</title>
   <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  	
	<style type="text/css">
	  #side_bar{
		  background-color:#c7c4a9;
		  padding:50px;
		  width:300px;
		  height : 450px;
	  }
	</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b4f2a7"">
    <div class="container-fluid">
	   <div class="navbar-header">
	   
	   <a class="navbar-brand" href="admin_dashboard.php"style="color: #211308">Library Management Sytem(LMS)</a></div>
	   <font style="color:#211308"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font>
	   <font style="color:#211308"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>

	   
	
	   <ul class="nav navbar-nav navbar-right">
	   <div class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        My Profile
      </a>
    
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="adminview_profile.php">View Profile</a></li>
        <li><a class="dropdown-item" href="adminedit_profile.php">Edit Profile</a></li>
        <li><a class="dropdown-item" href="adminchange_password.php">Change Password</a></li>
      </ul>
    </div>
	   <li class="nav-item">
       <a class="nav-link active" href="../logout.php" style="color: #211308">Log Out</a>
       </li>
	    </ul>
	</div>   
  </nav><br>
  <span><marquee>This is Library Management Sytem. Library opens at 8.00AM and closes at 6.00PM</marquee></span><br><br>
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="adminupdate.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="<?php echo $name ?>" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" value="<?php echo $email ?>" name="email">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" value="<?php echo $mobile ?>" name="mobile">
            </div>
            <div class="form-group">
                <label>Address</label>
               <textarea rows="3" cols="4" name="address" class="form-control"> <?php echo $address ?></textarea>
            </div> <br>
            <button type="submit" name="update" class="btn btn-outline-secondary" style="background-color: #b4f2a7">Update</button>
              
        </form>
    </div>
    <div class="col-md-4"></div>
   
   </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>