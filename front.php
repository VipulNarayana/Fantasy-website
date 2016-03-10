<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="js/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href='css/footer.css' rel='stylesheet'>
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
<li class="active"> <a href="front.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li ><a href="news.php">News</a></li>
<li ><a href="howtoplay.php">How To Play</a></li>
<li ><a href="aboutus.php">About us</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li><a href="Register.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
<li><a href="Login.php"><span class="glyphicon glyphicon-globe"></span>LogIn</a></li>
</ul>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-6">
<div id="myCarousel" class="carousel slide">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active">

<li data-target="#myCarousel" data-slide-to="1">

<li data-target="#myCarousel" data-slide-to="2" > 

<li data-target="#myCarousel" data-slide-to="3" > 
</ol>

<div class="carousel-inner">

<div class="item active">
<img src="img/J1.jpg" alt="1" class="img-responsive">
<div class="carousel-caption">
<p style="font-weight:bold;">Warner leads SRH to their first Win</p>
</div>
</div>

<div class="item ">
<img src="img/J2.jpg" alt="2" class="img-responsive">

<div class="carousel-caption">
<p style="font-weight:bold;">Harbhajan Blitz couldn't save Poor Mumbai</p>
</div>
</div>

<div class="item ">
<img src="img/J3.jpg" alt="3" class="img-responsive">

<div class="carousel-caption">
<p style="font-weight:bold;">Southee the hero as RR clinch a thriller</p>
</div>
</div>

<div class="item ">
<img src="img/J4.jpg" alt="4" class="img-responsive">

<div class="carousel-caption">
<p style="font-weight:bold;">Mccullum destroys SRH</p>
</div>
</div>
</div>

<a class="carousel-control left" href="#myCarousel" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left"></span></a>

<a class="carousel-control right" href="#myCarousel" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</div>
<div class="col-sm-4">

<?php
 require_once('connection.php');
 
 $query="SELECT * FROM `breaking news`";
 $r=mysql_query($query);

 while($row=mysql_fetch_array($r))
 {
	 echo"<table class='table table-table striped table-condensed table-hover'>
	 <tr class=''>
		<td>
		<a href='news.php'  >
		".$row['News']."
		</a>
		</tr>
		</table>";
 }
 
 ?>
</div>
<div class="col-sm-2">
<h3 style="color:blue;">Points Table</h3>
<table class='table table-striped table-condensed table-hover' >
<tr>
<th>SNo</th>
<th>Team</th>
<th>PLD</th>
<th>PTS</th>
</tr>
<?php
 require_once('connection.php');
 $query="SELECT * FROM `points table`";
 
 $r=mysql_query($query);
 
 while($row=mysql_fetch_array($r))
 {
	 echo"
		<tr class=''>
		<td>".$row['SNo']."</td>
		<td><img src =".$row['path']." width=\"30px\" height=\"30px\"></img></td>
		<td>".$row['PLD']."</td>
		<td>".$row['PTS']."</td>
		</tr>";
		
 }
 ?>
 
 </table>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<h3 style="color:orange;">Orange Cap</h3>
<table class='table table-striped table-condensed table-hover'>
<tr>
<th>SNo</th>
<th>Team</th>
<th>Name</th>
<th>Runs</th>
</tr>
<?php
 require_once('connection.php');
 $query="SELECT * FROM `orange cap`";
 $r=mysql_query($query);
 
 while($row=mysql_fetch_array($r))
 {
	 echo"
		<tr class=''>
		<td>".$row['SNo']."</td>
		<td><img src =".$row['Team']." width=\"50px\" height=\"50px\"></img></td>
		<td>".$row['Name']."</td>
		<td>".$row['Runs']."</td>
		</tr>";
 }
  ?>
		</table>

 

</div>
<div class="col-sm-4">
<h3 style="color:purple;">Purple Cap</h3>
<table class='table table-striped table-condensed table-hover'>
<tr>
<th>SNo</th>
<th>Team</th>
<th>Name</th>
<th>Wickets</th>
</tr>
<?php
 require_once('connection.php');
 $query="SELECT * FROM `purple cap`";
 $r=mysql_query($query);
 
 while($row=mysql_fetch_array($r))
 {
	 echo"
		<tr class=''>
		<td>".$row['SNo']."</td>
		<td><img src =".$row['Team']." width=\"50px\" height=\"50px\"></img></td>
		<td>".$row['Name']."</td>
		<td>".$row['Wickets']."</td>
		</tr>";
 }
  ?>
 </table>
 


</div>

<div class="col-sm-4">
<h3 style="color:gray;">Upcoming Fixtures</h2>
<table class='table table-striped table-condensed table-hover'>
<tr>
<th>Team1</th>
<th>Date/Time</th>
<th>Team2</th>
</tr>
<?php
 require_once('connection.php');
 $query="SELECT * FROM `fixtures`";
 $r=mysql_query($query);
 
 while($row=mysql_fetch_array($r))
 {
	 echo"
		<tr class=''>
		<td><img src =".$row['Team1']." width=\"50px\" height=\"50px\"></img></td>
		<td>".$row['Time']."</td>
		<td><img src =".$row['Team2']." width=\"50px\" height=\"50px\"></img></td>
		</tr>";
 }
		?>
		</table>
		
 

</div>
</div>
<!--
<div class='row'>
<div class='col-sm-6'>
<p style='color:blue;font-size:18px;'>Live Scores</p>
<iframe src="h1.php" width="400" height="400">
</iframe>
</div>


</div>

-->
</div>
<div id='footer'>
<h4 style='color:white; text-align:center'>&copy;FantasyCricket </h4>
</div>
</body>
</html>