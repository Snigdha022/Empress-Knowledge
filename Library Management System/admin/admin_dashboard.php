<?php
  require('functions.php');
  session_start();
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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5c9da">
    <div class="container-fluid">
	   <div class="navbar-header">
	   
	   <a class="navbar-brand" href="admindex.php" <font style="color:#324a49" >Library Management Sytem(LMS)</font></a></div>
	   <font style="color:#324a49"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font>
	   <font style="color:#324a49s"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>

	   
	
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
       <a class="nav-link active" href="../logout.php" style="color: #324a49">Log Out</a>
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
    <div class="col-md-3">
    <div class="card text-white bg-info mb-5" style="max-width: 18rem;" >
         <div class="card-header">Registered Users</div>
         <div class="card-body">
         <h5 class="card-title"> Number of total registered users:<?php echo get_user_count(); ?></h5>
         <a href="regusers.php" class="btn btn-warning" target="_blank">View Registered Users</a>
         </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
         <div class="card-header">Registered Books</div>
         <div class="card-body">
         <h5 class="card-title">Number of available books: <?php echo get_book_count(); ?></h5>
         <a href="regbooks.php" class="btn btn-secondary" target="_blank">View Available Books</a>
         </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
         <div class="card-header">Registered Categories</div>
         <div class="card-body">
         <h5 class="card-title">Number of book categories:<?php echo get_category_count(); ?></h5>
         <a href="regcat.php" class="btn btn-danger" target="_blank">View Categories</a>
         </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
         <div class="card-header">Registered Authors</div>
         <div class="card-body">
         <h5 class="card-title">Number of available authors: <?php echo get_author_count(); ?></h5>
         <a href="regauth.php" class="btn btn-info" target="_blank">View  Authors</a>
         </div>
    </div>
</div>
  
<div class="col-md-3">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
         <div class="card-header">Issued Books</div>
         <div class="card-body">
         <h5 class="card-title">Number of total issued books: <?php echo get_issuedbooks_count(); ?></h5>
         <a href="view_issuedbooks.php" class="btn btn-light" target="_blank">View  Issued Books</a>
         </div>
    </div>
</div>
   
   </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>