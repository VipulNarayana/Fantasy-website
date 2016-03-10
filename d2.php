<html>
<head>
<style>

</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-striped table-hover table-bordered">
<form action="d3.php">
<?php
$servername="localhost";
	$username="fantasy";
	$password="";

	$dbc=mysql_connect($servername,$username,$password) or die('Could not connect to Database');

	$database="fantasy";
	$db=mysql_select_db($database,$dbc) or die('Could not select Database');
	$query="SELECT `Question`,`Option A`,`Option B`,`Option C`,`Option D` FROM Poll";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	
	$i=0;
	while($i<$num)
	{
	$question=mysql_result($result,$i,'Question');
	$optA=mysql_result($result,$i,'Option A');
		$optB=mysql_result($result,$i,'Option B');
			$optC=mysql_result($result,$i,'Option C');
				$optD=mysql_result($result,$i,'Option D');
				
				echo "<tr class='active' ><td >$question</td></tr> <tr><td><input type='radio' name='opt' value=''>$optA</td></tr> <tr><td><input type='radio' name='opt' value=''>$optB</td></tr> <tr><td><input type='radio' name='opt' value=''>$optC</td></tr> <tr><td><input type='radio' name='opt' value=''>$optD</td></tr>";
				
$i++;
	}
	?>
	<tr>
	<td><button type="submit"  class="btn btn-success">Submit</button></td>
	</tr>
</table>
</form>

</body>
</html>