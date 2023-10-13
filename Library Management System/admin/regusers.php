<?php
  require('functions.php');
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
        $password1="";
        $mobile="";
        $address="";

		
        $query = "SELECT * FROM users "; 	
        
?>

<!DOCTYPE html>
<html>
<head>
   <title>Details of Registered Users</title>
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
	   <div class="navbar-header">
	   
	   <a class="navbar-brand" href="admindex.php" <font style="color:#91fffd" >Library Management Sytem(LMS)</font></a></div>
	   <font style="color:#91fffd"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font>
	   <font style="color:#91fffd"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>

	   
	
	   <ul class="nav navbar-nav navbar-right">
	   <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        My Profile
      </a>
    
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="adminview_profile.php">View Profile</a></li>
        <li><a class="dropdown-item" href="adminedit_profile.php">Edit Profile</a></li>
        <li><a class="dropdown-item" href="adminchange_password.php">Change Password</a></li>
      </ul>
    </div>
	   <li class="nav-item">
       <a class="nav-link active" href="../logout.php" style="color: #9ededc">Log Out</a>
       </li>
	    </ul>
	</div>   
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#91fffd">
  <div class="container-fluid">
  <ul class="nav navbar-nav navbar-center">
      <li class="nav-item">
      <a href="admin_dashboard.php" class="nav-link" >Dashboard</a>
      </li>
      <div class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
       Book
      </a>
    
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="add_newbook.php">Add New Book</a></li>
        <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>
        
      </ul>
    </div>
    <div class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
       Categories
      </a>
    
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="add_newcat.php">Add New Category</a></li>
        <li><a class="dropdown-item" href="manage_cat.php">Manage Categories</a></li>
        
      </ul>
    </div>
    <div class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
       Authors
      </a>
    
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="add_newauth.php">Add New Author</a></li>
        <li><a class="dropdown-item" href="manage_auth.php">Manage Authors</a></li>
        
      </ul>
    </div>
    <li class="nav-item">
      <a href="issuebook.php" class="nav-link" >Issue Book</a>
      </li>
  </ul>
  </div>



  </nav>
  <span><marquee>This is Library Management Sytem. Library opens at 8.00AM and closes at 6.00PM</marquee></span><br><br>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
          <form>
           <table class="table table-hover" width="900px" style="text-align: center">
              <tr class="table-info">
                  <th class="table-info">Name</th>
                  <th class="table-info">Email</th>
                  
                  <th class="table-info">Mobile</th>
                  <th class="table-info">Address</th>
              </tr>
              <?php

                      $query_run=mysqli_query($conn, $query);		
                      while($row = mysqli_fetch_assoc( $query_run)){
                          $name=$row['name'];
                          $email=$row['email'];
                          
                          $mobile=$row['mobile'];
                          $address=$row['address'];
                          ?>
                          <tr class="table-warning">
                             <td class="table-warning"><?php echo $name; ?></td>
                             <td class="table-warning"><?php echo $email; ?></td>
                             
                             <td class="table-warning"><?php echo $mobile; ?></td>
                             <td class="table-warning"><?php echo $address; ?></td>
                          
                          </tr>
                          <?php

                      }

              ?>

           </table>
          </form>
      </div>
      <div class="col-md-2"></div>

      




  </div>
   
   
   </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>