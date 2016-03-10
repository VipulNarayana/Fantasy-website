<?php

?>
<html>
<head>
	
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
	
	<body>
	<div class="navbar-inverse ">
<div class="container">
<div class="navbar-header">
<a class="navbar-brand" href="front.php">Fantasy Cricket</a>
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-left" >
<li > <a href="front.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li ><a href="news.php">News</a></li>
<li ><a href="howtoplay.php">How To Play</a></li>
<li ><a href="aboutus.php">About us</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li ><a href="Register.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
<li class="active"><a href="Login.php"><span class="glyphicon glyphicon-globe"></span>LogIn</a></li>
</ul>
</div>
</div>
</div>
	<div class="container">
  <h2 style="text-align:center;">Enter your Login Details To get Started With Fantasy Cricket</h2>
		<form role="form" class="form-horizontal" action="login_connect.php" method="post">
		<div class="form-group">
			<label  for="username" class="control-label col-sm-2">Username:</label>
			<div class="col-sm-4">
			<input type="text" name="user" class="form-control" placeholder="Enter Username" required="true" pattern="[a-zA-Z0-9]{1,}">
			</div>
			</div>
			
			<div class="form-group">
			<label for="password" class="control-label col-sm-2">Password:</label>
			<div class="col-sm-4">
			<input type="password" name="key" class="form-control" placeholder="Enter Password" required="true" pattern="[a-zA-Z0-9]{1,}">
			</div>
			</div>
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">
			<button type="submit" class="btn btn-default" >Submit</button>
			</div>
			</div>
		</form>
		</i><a href="Forgot.php">Forgot Password</a></li>
		</div>
		
	</body>
</html>
