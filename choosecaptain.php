<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="js/bootstrap.min.css">
		<script src="js/bootstrap.min.js"></script>
		<link href='css/background.css' rel='stylesheet'>
		</head>
		<div class="col-md-2" id='move'>
		<ul class="nav nav-pills nav-stacked">
		<li ><a href="manage.php">Home</a></li>
		<li ><a href="editteam.php">Edit Team</a></li>
		<li ><a href="players.php">Manage your Team</a></li>
		<li class="active"><a href="choosecaptain.php">Choose your captain</a></li>
		<li><a href="showpoints.php">Show My Points</a></li>
		</ul>
		</div>
<?php
require_once('connection.php');
	session_start();
	ob_start();
	?>
	<?php
	if($_SESSION['user']) {
	?>
	<h3 style="text-align:center;">Click here to <a href="logout.php" tite="Logout">Logout.</a></h3>
	<?php 
	}
	else{
	header('Location:Login.php');	
	}
	
	if($_SESSION['user']=='vipul')
	{
	
	$query="SELECT `Name` FROM `choosen`";
	$result=mysql_query($query);
	?>
	<form role="form" method='post' action=''>
    <div class="form-group">
	<div class="col-sm-4">
	 <label for="sel1">Choose your captain:</label>
      <select class="form-control" id="sel1 " name="select">

	<?php
	while($row=mysql_fetch_array($result))
	{
		?>
		<option value='<?php echo $row['Name']?>'>
	<?php echo	$row['Name']?></option>
	<?php
	}
	
	?>

	</div>
	</div>
	<div id='info'> 
	<input type='submit' id='b1' value='Submit' class='btn btn-info btn-md'>
	</div>
		</select>
	</form>
	<?php
	
	if(isset($_POST['select']))
	{
	$q="DELETE FROM `captain`";
	$r=mysql_query($q);
	$select=$_POST['select'];
	$query="INSERT INTO `captain`(`Name`) VALUES('$select') ";
	
	
	$result=mysql_query($query);
	}
	}
	else if($_SESSION['user']=='harsha')
	{
		$query="SELECT `Name` FROM `ten` ";
	$result=mysql_query($query);
	?>
	<form role="form" method='post' action=''>
    <div class="form-group">
	<div class="col-sm-4">
	 <label for="sel1">Choose your captain:</label>
      <select class="form-control" id="sel1 " name="select">

	<?php
	while($row=mysql_fetch_array($result))
	{
		?>
		<option value='<?php echo $row['Name']?>'>
	<?php echo	$row['Name']?></option>
	<?php
	}
	
	?>

	</div>
	</div>
	<div id='info'> 
	<input type='submit' id='b1' value='Submit' class='btn btn-info btn-md'>
	</div>
		</select>
	</form>
	<?php
	
	if(isset($_POST['select']))
	{
	$q="DELETE FROM `cap`";
	$r=mysql_query($q);
	$select=$_POST['select'];
	$query="INSERT INTO `cap`(`Name`) VALUES('$select') ";
	$result=mysql_query($query);
	}
	}