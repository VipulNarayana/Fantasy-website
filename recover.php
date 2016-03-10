<html>
<head>
	
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>
<form action="recover_connect.php" method='post'>
<div class="form-group">
		<label for="Password" class="control-label col-sm-2">Password:</label>
		<div class="col-sm-4">
		
		<input type="password" name="password" required="true" value="" placeholder="Enter Password" class="form-control" pattern="[a-zA-Z0-9]{1,}">
		</div>			
		</div>
		<br/><br/>
		<div class="form-group">
		<label for="Confirm Password" class="control-label col-sm-2">Confirm Password:</label>
		<div class="col-sm-4">
		<input type="password" name="conf" value="" placeholder="Both Passwords should match" required="true" class="form-control" pattern="[a-zA-Z0-9]{1,}">
		</div>
		</div>
		<br/><br/>
		<div class="form-group">
		<label for="Email" class="control-label col-sm-2">Email:</label>
		<div class="col-sm-4">
		<input type="email" name="email" value="" id="email" placeholder="Enter Email" required="true" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
		</div>
		</div>
		
		<div class="col-sm-2">
		<button type="submit" class="btn btn-info btn-md">Update</button>
		</div>
		</form>
		
</body>
