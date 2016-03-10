
<!DOCTYPE html>
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
<li class="active"><a href="Register.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
<li ><a href="Login.php"><span class="glyphicon glyphicon-globe"></span>LogIn</a></li>
</ul>
</div>
</div>
</div>
		<div class="container">
		<h1 style="text-align:center;">Register To have Unlimited Sporting Entertainment</h1>
		<form action="reg_connect.php" method="post" role="form" class="form-horizontal" >
		<div class="form-group">
		<label for="username" class="control-label col-sm-2">Username</label>	
			<div class="col-sm-4">
		<input type="text" required="true"  name="username" value="" placeholder="Enter Username" class="form-control" pattern="[a-zA-Z0-9]{1,}" >
		</div>		
		</div>
		<div class="form-group">
		<label for="Password" class="control-label col-sm-2">Password:</label>
		<div class="col-sm-4">
		
		<input type="password" name="password" required="true" value="" placeholder="Enter Password" class="form-control" pattern="[a-zA-Z0-9]{1,}">
		</div>			
			</div>
		<div class="form-group">
		<label for="Confirm Password" class="control-label col-sm-2">Confirm Password:</label>
		<div class="col-sm-4">
		<input type="password" name="conf" value="" placeholder="Both Passwords should match" required="true" class="form-control" pattern="[a-zA-Z0-9]{1,}">
		</div>
		</div>
		<div class="form-group">
		<label for="Email" class="control-label col-sm-2">Email:</label>
		<div class="col-sm-4">
		<input type="email" name="email" value="" id="email" placeholder="Enter Email" required="true" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
		</div>
		</div>
		<div class="form-group">
		<label for="ScreenName" class="control-label col-sm-2">ScreenName:</label>
		<div class="col-sm-4">
		<input type="text" name="screen" value="" id="screen"  placeholder="ScreenName" required="true" class="form-control">
		</div>
		</div>
		<div class="col-sm-offset-2 col-sm-4">
		<button type="submit" class="btn btn-primary btn-lg">Register</button>
		</div>
				</form>
</div>
		</body>
	</html>