<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../js/bootstrap.min.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-1.11.2.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../css/tablefornew.css">
	</head>
<body>


<div class="container-fluid">
	<div class="dropdown">
	<div class="row">
	<div class="col-sm-1 col-sm-offset-8">
	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >ALL PLAYERS
	<span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li ><a role="menuitem" tabindex="-1" href="batsman.php">Batsman</a></li>
          <li ><a role="menuitem" tabindex="-1" href="bowler.php">Bowler</a></li>
          <li class="active" ><a role="menuitem" tabindex="-1" href="wicketkeeper.php">WicketKeeper</a></li>
		<li ><a role="menuitem" tabindex="-1" href="allrounder.php">AllRounder</a></li>
		<li ><a role="menuitem" tabindex="-1" href="../players.php">All Players</a></li>
     </ul>
	</div>
	
	<div class="col-sm-1 col-sm-offset-1">
	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >Overseas
	<span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li ><a role="menuitem" tabindex="-1" href="batsman_overseas.php">Batsman</a></li>
          <li ><a role="menuitem" tabindex="-1" href="bowler_overseas.php">Bowler</a></li>
          <li class="active"><a role="menuitem" tabindex="-1" href="wk_overseas.php">WicketKeeper</a></li>
		  <li ><a role="menuitem" tabindex="-1" href="ar_overseas.php">AllRounder</a></li>
     </ul>
	</div>
	</div>
	</div>
	<div class="col-md-2" id='move'>
		<ul class="nav nav-pills nav-stacked">
		<li ><a href="../manage.php">Home</a></li>
		<li ><a href="../editteam.php">Edit Team</a></li>
		<li class="active"><a href="../players.php">Manage your Team</a></li>
		<li><a href="../choosecaptain.php">Choose your captain</a></li>
		<li><a href="../showpoints.php">Show My Points</a></li>
		</ul>
		</div>
</body>

<?php
	session_start();
	ob_start();
	?>
	Click here to <a href="../logout.php" tite="Logout">Logout.</a>

<?php

require('../connection.php');

$query="SELECT * FROM `players` WHERE `Role`=2 AND `Value`=2";
$rs=mysql_query($query);


$k=100;
		echo "<div class='container'>
				<div class='row'>
					<div class='scrollit'>
					<div class='col-sm-10'>
						<table id='racetimes' >
						<table class='table table-striped table-hover table-bordered ' >
							<form method='POST' action=''>
								<tr>
									<th></th>
									<th>Team</th>
									<th>Players</th>
									<th>Price</th>
									<th>Points</th>
								</tr>";


		while($row=mysql_fetch_array($rs))
			{
				?>
				<tr>
				<td><input type='checkbox' name='check[]' value='<?php echo $row['Name']?>'></td>
			<?php

			echo "<td><img src =".$row['path']." width=\"30px\" height=\"30px\"></img></td>".
				"<td>".$row['Name']."</td>
				<td>".$row['Price'] ."</td>
				<td>".$row['GD_Points']."</td>
				</tr>";
			}
		echo "<input type='submit' id='b1' value='Submit' class='btn btn-success'>
						</table>
					</div>
					</div>
					</div>";
					if($_SESSION['user']=='vipul')
					{
		if(isset($_POST['check']))
			{
				$check = $_POST['check'];
				if(empty($check)) 
					{} 
				else
					{
						$N = count($check);
						echo("You selected $N Players ");
						echo "<div class='col-sm-6'>
								<div class='gnb'>
								<table class='table table-striped table-hover table-bordered'>
									<tr>
										<th>Name</th>
										<th>Price</th>
									</tr>";
						$count="SELECT COUNT(`Name`) AS `Overseas` FROM `choosen` WHERE `Value`=2";
						$query=mysql_query($count);

						while($row=mysql_fetch_array($query))
							{
								$count1 = $row['Overseas'];
							}
						for($i=0; $i < $N; $i++)
							{
								$query  = "SELECT COUNT(`Name`)  AS `Overseas` FROM `players` WHERE `Name`='$check[$i]' and `Value` = 2";
								$result = mysql_query($query);
								while($row=mysql_fetch_array($result))
									{	
										$count2 =  $row['Overseas'];
									}
							}
						if($count1 + $count2 <= 4)
							{	
								for($i=0; $i < $N; $i++)
									{
										$query="INSERT INTO `choosen`(`Name`,`Price`,`Role`,`Value`) SELECT `Name`,`Price`,`Role`,`Value` FROM `players` WHERE `Name`='$check[$i]'";
										$result=mysql_query($query);
										$q="SELECT `Price`,'Role',`Value` FROM `choosen` WHERE `Name`='$check[$i]' ";
										$v=mysql_query($q)	;
									}

								$c="SELECT * FROM `choosen` ";
								$abc=mysql_query($c);

								while($row=mysql_fetch_array($abc))
									{
										echo "<tr>
												<td>".$row['Name']."</td>
												<td>".$row['Price'] ."</td>
											</tr>";
										$k=$k-$row['Price'];
									}
							}
						else
							{
								echo "<script>alert(\"You have already selected 4 overseas players\")</script>" ;
								$c="SELECT * FROM `choosen` ";
								$abc=mysql_query($c);
								while($row=mysql_fetch_array($abc))
									{
										echo "<tr>
												<td>".$row['Name']."</td>
												<td>".$row['Price'] ."</td>
											</tr>";
										$k=$k-$row['Price'];
									}

							}
			?>
				<input type="button"  class="btn btn-primary btn-sm"  value="<?php echo $k ?>">
			<?php

					}
			}
					}
			else if($_SESSION['user']=='harsha')
					{
						if(isset($_POST['check']))
			{
				$check = $_POST['check'];
				if(empty($check)) 
					{} 
				else
					{
						$N = count($check);
						echo("You selected $N Players ");
						echo "<div class='gnb'>
								<table class='table table-striped table-hover table-bordered'>
									<tr>
										<th>Name</th>
										<th>Price</th>
									</tr>";
						$count="SELECT COUNT(`Name`) AS `Overseas` FROM `ten` WHERE `Value`=2";
						$query=mysql_query($count);

						while($row=mysql_fetch_array($query))
							{
								$count1 = $row['Overseas'];
							}
						for($i=0; $i < $N; $i++)
							{
								$query  = "SELECT COUNT(`Name`)  AS `Overseas` FROM `players` WHERE `Name`='$check[$i]' and `Value` = 2";
								$result = mysql_query($query);
								while($row=mysql_fetch_array($result))
									{	
										$count2 =  $row['Overseas'];
									}
							}
						if($count1 + $count2 <= 4)
							{	
								for($i=0; $i < $N; $i++)
									{
										$query="INSERT INTO `ten`(`Name`,`Price`,`Role`,`Value`,`Points`) SELECT `Name`,`Price`,`Role`,`Value`,`Total_Points` FROM `players` WHERE `Name`='$check[$i]'";
										$result=mysql_query($query);
										$q="SELECT `Price`,'Role',`Value` FROM `ten` WHERE `Name`='$check[$i]' ";
										$v=mysql_query($q)	;
									}

								$c="SELECT * FROM `ten` ";
								$abc=mysql_query($c);

								while($row=mysql_fetch_array($abc))
									{
										echo "<tr>
												<td>".$row['Name']."</td>
												<td>".$row['Price'] ."</td>
											</tr>";
										$k=$k-$row['Price'];
									}
							}
						else
							{
								echo "<script>alert(\"You have already selected 4 overseas players\")</script>" ;
								$c="SELECT * FROM `ten` ";
								$abc=mysql_query($c);
								while($row=mysql_fetch_array($abc))
									{
										echo "<tr>
												<td>".$row['Name']."</td>
												<td>".$row['Price'] ."</td>
											</tr>";
										$k=$k-$row['Price'];
									}

							}
						
					}
			}
			?>
					<input type="button"  class="btn btn-primary btn-sm"  value="<?php  echo "Credits Remaining:" .$k ?>">
					<?php
						
					}
					
					?>
					
					
							
	
					





