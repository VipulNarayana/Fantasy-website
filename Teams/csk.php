<html>
<head>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../js/bootstrap.min.css">
  <script src="../js/jquery-1.11.2.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-4">
<ul class="nav nav-pills">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="players.php">ALLROUNDERS<span class="caret">
</span></a>
<ul class="dropdown-menu">
<li class="active"><a href="../players.php">All Players</a></li>
</ul></li>
</ul>
</div>



<div class="col-sm-4">
<ul class="nav nav-pills">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="batsman.php">TEAMS<span class="caret">
</span></a>
<ul class="dropdown-menu">
<li class="active"><a href="csk.php">CSK</a></li>
<li><a href="rr.php">RR</a></li>
<li><a href="kkr.php">KKR</a></li>
<li><a href="kxip.php">KXIP</a></li>
<li><a href="mi.php">MI</a></li>
<li><a href="rcb.php">RCB</a></li>
<li><a href="srh.php">SRH</a></li>
<li><a href="dd.php">DD</a></li>
</ul></li>
</ul>


</div>
</div>
</div>
</body>



<?php

require('../connection.php');

$query="SELECT * FROM `csk` ";
$rs=mysql_query($query);

$k=100;
		echo "<div class='container'>
				<div class='row'>
					<div class='col-sm-6'>
						<table class='table table-striped table-hover table-bordered ' >
							<form method='POST' action=''>
								<tr>
									<th></th>
									
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

			echo "
				<td>".$row['Name']."</td>
				<td>".$row['Price'] ."</td>
				<td>".$row['GD_Points']."</td>
				</tr>";
			}
		echo "<input type='submit' id='b1' value='Submit' class='btn btn-success'>
						</table>
					</div>";
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
			
			?>




