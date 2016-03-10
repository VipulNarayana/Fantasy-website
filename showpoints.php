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
		<li ><a href="choosecaptain.php">Choose your captain</a></li>
		<li class="active"><a href="showpoints.php">Show My Points</a></li>
		</ul>
		</div>
<?php
require_once('connection.php');
	session_start();
	ob_start();
	?>
	<?php
	$sum=0;
	if($_SESSION['user']) {
	?>
	<h3 style="text-align:center;">Click here to <a href="logout.php" tite="Logout">Logout.</a></h3>
	<?php 
	}
	else{
	header('Location:Login.php');	
	}
	if($_SESSION['user'] == 'vipul' )
	{
		
		$q = "SELECT `Name`,`Total_Points` from `players` ";
		$result11=mysql_query($q);
		while($row = mysql_fetch_array($result11))
		{
			$name =  $row['Name'];
			$p = $row['Total_Points'];
			$query = "UPDATE `choosen` SET `Points` = '$p' WHERE `Name` = '$name' ";
			$result=mysql_query($query);
		}
		
		$q1 = "SELECT `Name` from `captain` ";
		$result14=mysql_query($q1);
		while($row = mysql_fetch_array($result14))
		{
			$name = $row['Name'];
			
			$query12 = "UPDATE `choosen` SET `Points`=2*`Points` WHERE `Name`='$name'";
			
			$result=mysql_query($query12);
		}
		
		
		$a="SELECT `Name`,`GD_Points`,`Total_Points` FROM `players`";
		$b=mysql_query($a);
		
		
		while($row=mysql_fetch_array($b))
		{
			$name=$row['Name'];
			$gd=$row['GD_Points'];
			$sum=$row['Total_Points'];
			$sum=$sum+$gd;
			
			$c="UPDATE `choosen` SET `GD`='$gd' WHERE `Name`='$name'";
			$d=mysql_query($c);
			
			$c="UPDATE `players` SET `Total_Points`='$sum' WHERE `Name`='$name'";
			$d=mysql_query($c);
			
			
		}
		$a="SELECT * FROM `choosen`";
		$b=mysql_query($a);
		
		while($row=mysql_fetch_array($b))
		{
			$name=$row['Name'];
			$gd=$row['GD'];
			$sum=$row['Points'];
			$sum=$sum + $gd;
			
			
			
			$h="UPDATE `choosen` SET `Points`='$sum' WHERE `Name`='$name'";
			$g=mysql_query($h);
			}
			
			$h="UPDATE `players` SET `GD_Points`='0' ";
			$g=mysql_query($h);
		
	$q="SELECT * FROM `choosen`";
	$r=mysql_query($q);
	
	echo "<div class='col-sm-5'>
			<table class='table table-striped table-hover table-bordered'>
									<tr>
										<th>Name</th>
										<th>GD_Points</th>
											<th>Total_Points</th>
									</tr>";
	while($row=mysql_fetch_array($r))
	{
		echo "<tr>
		<td>".$row['Name']."</td>
			<td>".$row['GD']."</td>
			<td>".$row['Points'] ."</td>
			</tr>";
			$sum=$sum+$row['Points'];
	}
?>
</table>
</div>
<?php

	}
	else if($_SESSION['user']='harsha')
	{
			$q = "SELECT `Name`,`Total_Points` from `players` ";
		$result11=mysql_query($q);
		while($row = mysql_fetch_array($result11))
		{
			$name =  $row['Name'];
			$p = $row['Total_Points'];
			$query = "UPDATE `ten` SET `Points` = '$p' WHERE `Name` = '$name' ";
			$result=mysql_query($query);
		}
		
		$q1 = "SELECT `Name` from `cap` ";
		$result14=mysql_query($q1);
		while($row = mysql_fetch_array($result14))
		{
			$name = $row['Name'];
			
			$query12 = "UPDATE `ten` SET `Points`=2*`Points` WHERE `Name`='$name'";
			
			$result=mysql_query($query12);
		}
	
		$a="SELECT `Name`,`GD_Points`,`Total_Points` FROM `players`";
		$b=mysql_query($a);
		
		
		while($row=mysql_fetch_array($b))
		{
			$name=$row['Name'];
			$gd=$row['GD_Points'];
			$sum=$row['Total_Points'];
			$sum=$sum+$gd;
			
			$c="UPDATE `ten` SET `GD`='$gd' WHERE `Name`='$name'";
			$d=mysql_query($c);
			
			$c="UPDATE `players` SET `Total_Points`='$sum' WHERE `Name`='$name'";
			$d=mysql_query($c);
			
			
		}
		$a="SELECT * FROM `ten`";
		$b=mysql_query($a);
		
		while($row=mysql_fetch_array($b))
		{
			$name=$row['Name'];
			$gd=$row['GD'];
			$sum=$row['Points'];
			$sum=$sum + $gd;
			
			
			
			$h="UPDATE `ten` SET `Points`='$sum' WHERE `Name`='$name'";
			$g=mysql_query($h);
			}
			
			$h="UPDATE `players` SET `GD_Points`='0' ";
			$g=mysql_query($h);
	
	$q="SELECT * FROM `ten`";
	$r=mysql_query($q);
	
	echo "<div class='col-sm-5'>
			<table class='table table-striped table-hover table-bordered'>
									<tr>
										<th>Name</th>
										<th>Points</th>
									</tr>";
	while($row=mysql_fetch_array($r))
	{
		echo "<tr>
		<td>".$row['Name']."</td>
			<td>".$row['Points'] ."</td>
			</tr>";
			$sum=$sum+$row['Points'];
	}
	}
	echo $sum;
	?>
	</table>
	</div>