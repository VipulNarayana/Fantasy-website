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
		<li class="active"><a href="editteam.php">Edit Team</a></li>
		<li ><a href="players.php">Manage your Team</a></li>
		<li><a href="choosecaptain.php">Choose your captain</a></li>
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
	Click here to <a href="logout.php" tite="Logout">Logout.</a>
	<?php 
	}
	else{
	header('Location:Login.php');	
	}
	if($_SESSION['user']=='vipul')
	{
	$query="SELECT * FROM `choosen`";
	$result=mysql_query($query);

	
echo "<div class='col-sm-5'>
<form method='POST' action=''>
<table class='table table-striped table-hover table-bordered'>
									<tr>
										<th></th>
										<th>Name</th>
										<th>Price</th>
									</tr>";
	while($row=mysql_fetch_array($result))
	{
		?>
		<tr>
				<td><input type='checkbox' name='check[]' value='<?php echo $row['Name']?>'></td>
				<?php
		echo "<td>".$row['Name']."</td>
			<td>".$row['Price'] ."</td>
			</tr>";
	}
		echo "<input type='submit' id='b1' value='Submit' class='btn btn-danger'>";
	echo "</table>
	
	
	</div>";
	if(isset($_POST['check']))
			{
				$check = $_POST['check'];
				if(empty($check)) 
					{} 
				else
					{
						$N = count($check);
						echo "<div class='col-sm-5'>
<table class='table table-striped table-hover table-bordered'>
									<tr>
								
										<th>Name</th>
										<th>Price</th>
									</tr>";
		for($i=0; $i < $N; $i++)
		{
		$query="DELETE  FROM `choosen` WHERE `Name`='$check[$i]' ";
		$result=mysql_query($query);
		}
		
	$q="SELECT * FROM `choosen`";
	$r=mysql_query($q);

	
echo "After Deletion you will have";
	while($row=mysql_fetch_array($r))
	{
		
		echo "<tr>
		<td>".$row['Name']."</td>
			<td>".$row['Price'] ."</td>
			</tr>";
	}

	echo "</table>
	
	
	</div>";
		
		}
					}
	}
	else if($_SESSION['user']=='harsha')
	{
		$query="SELECT * FROM `ten`";
	$result=mysql_query($query);

	
echo "<div class='col-sm-5'>
<form method='POST' action=''>
<table class='table table-striped table-hover table-bordered'>
									<tr>
										<th></th>
										<th>Name</th>
										<th>Price</th>
									</tr>";
	while($row=mysql_fetch_array($result))
	{
		?>
		<tr>
				<td><input type='checkbox' name='check[]' value='<?php echo $row['Name']?>'></td>
				<?php
		echo "<td>".$row['Name']."</td>
			<td>".$row['Price'] ."</td>
			</tr>";
	}
		echo "<input type='submit' id='b1' value='Submit' class='btn btn-danger'>";
	echo "</table>
	
	
	</div>";
	if(isset($_POST['check']))
			{
				$check = $_POST['check'];
				if(empty($check)) 
					{} 
				else
					{
						$N = count($check);
						echo "<div class='col-sm-5'>
<table class='table table-striped table-hover table-bordered'>
									<tr>
								
										<th>Name</th>
										<th>Price</th>
									</tr>";
		for($i=0; $i < $N; $i++)
		{
		$query="DELETE  FROM `ten` WHERE `Name`='$check[$i]' ";
		$result=mysql_query($query);
		}
		
	$q="SELECT * FROM `ten`";
	$r=mysql_query($q);

	
echo "After Deletion you will have";
	while($row=mysql_fetch_array($r))
	{
		
		echo "<tr>
		<td>".$row['Name']."</td>
			<td>".$row['Price'] ."</td>
			</tr>";
	}

	echo "</table>
	
	
	</div>";
		
		}
					}
	}
					?>
					
					