<?php
include('connection.php');
session_start();
?>

<html>
	<head>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Online Notice Board</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                       
      </button>
      <a class="navbar-brand" href="index.php">Online notice Board</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
        <li><a href="index.php?option=about">About</a></li>
        <li><a href="index.php?option=contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?option=admin_login">Login</a></li>
          <li><a href="index.php?option=admin_reg">Sign Up</a></li>
        </ul>
      </li>
      	<!-- <li><a href="index.php?option=admin_login">Admin login</a></li>
      	<li><a href="index.php?option=admin_reg">Admin Sign up</a></li> -->

        <li><a href="index.php?option=New_user">Sign Up</a></li>
        <li><a href="index.php?option=login">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- container -->
<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			elseif ($opt=="admin_reg") {
				include ('admin_registration.php');
			}
			
			else if($opt=="login")
			{
			include('login.php');
			}
			else if ($opt=="admin_login") {
				include('admin_login.php');
			}
		}
		else
		{
			include ('front.php');
			include('login.php');
		}
		?>
		
		
		
		
		</div>
	
		
		
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->


	
	</body>	
</html>
