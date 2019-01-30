<?php 
session_start();
include('../connection.php');
$user= $_SESSION['user'];
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    

    <title>Online Notice Board User Dashboard</title>

    
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/dashboard.css" rel="stylesheet">
    <script type="text/javascript" scr="js/bootstrap.min.js"></script>
    <script type="text/javascript" scr="js/jquery_library.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hello <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>
    <!-- <br><br><br><br><br> -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <ul class="nav">
           <!--  <li class="active"><a href="index.php">Dashboard</a></li> -->
			
			 <li><a href="index.php?page=notification"> Notification</a></li>
			<li><a href="index.php?page=update_password">Update Password</a></li>
            <li><a href="index.php?page=update_profile"> Update Profile</a></li>
			
            
          </ul>
         
         
        </div>
        <div class="col-sm-9">
          <!-- container-->
		  <?php 
		      @$page=$_GET['page'];
		  //if($page!="")
		  //{
		  if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="notification")
			{
				include('notification.php');
			
			}
			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			
		  // else
		  //  {
		  // include('notification.php');}
		  ?>
		  <!-- container end-->
		   
		  
		  <!-- <h1 class="page-header">Dashboard</h1>
		   -->
		  

          
         
        </div>
      </div>
    </div>

    
    <script src="../js/bootstrap.min.js"></script>
    
  </body>
</html>
