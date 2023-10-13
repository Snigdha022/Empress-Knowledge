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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5cdba">
    <div class="container-fluid">
	   <div class="navbar-header">
	   
	   <a class="navbar-brand" href="admindex.php" <font style="color:#170c07" >Library Management Sytem(LMS)</font></a></div>
	   <font style="color:#170c07"><span><strong>Welcome:<?php echo $_SESSION['name'];?></strong></span></font>
	   <font style="color:#170c07"><span><strong>Email:<?php echo $_SESSION['email'];?></strong></span></font>

	   
	
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
       <a class="nav-link active" href="../logout.php"style="color:#170c07">Log Out</a>
       </li>
	    </ul>
	</div>   
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#a1fff6">
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
       <div class="col-md-4"></div>
       <div class="col-md-4">
           <form action="addcat_action.php" method="post">
              <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" id="inputEmail3" placeholder="Category Name" name="cat_name" required="">
                   </div>
              </div><br>
              
              <button type="submit" class="btn btn-outline-secondary" style="background-color: #f5cdba" name="add_cat">Add Category</button>

           </form>
       </div>
       <div class="col-md-4"></div>

   </div>
   
   </div>
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>