<html>
<head>
	
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>

<table class="table table-hover table-bordered ">
<tr class="active">
<th >Upcoming Fixtures</th>
</tr>
<tr class="success">
<th>Country 1</th>
<th>Country 2</th>
<th>Date</th>
</tr>
<?php
	$servername="localhost";
	$username="fantasy";
	$password="";

	$dbc=mysql_connect($servername,$username,$password) or die('Could not connect to Database');

	$database="fantasy";
	$db=mysql_select_db($database,$dbc) or die('Could not select Database');
	$query=("SELECT `Team 1`,`Team 2`,`Date` FROM `fixtures`");
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	$i=0;
	while($i<$num)
	{
		$team1=mysql_result($result,$i,'Team 1');
		$team2=mysql_result($result,$i,'Team 2');
		$date=mysql_result($result,$i,'Date');
		echo "<tr><td>$team1</td><td>$team2</td><td>$date</td></tr>";
		$i++;
	
	}
	?>
	</td>
	</tr>
	</table>

	</body>
	</html>