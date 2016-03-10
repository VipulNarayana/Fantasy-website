<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="js/bootstrap.min.css">
		<link href='css/background.css' rel='stylesheet'>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/tablefor.css">
		</head>
		<body>
		<?php 
		session_start();
		ob_start();
		if($_SESSION['user']) {
			?>
		<h2>You can Now choose your options <?php echo $_SESSION['user']; 
		?>
		</h2>
		<h3 style="text-align:center;">Click here to <a href="logout.php" tite="Logout">Logout.</a></h3>
		<?php 
		
		}
		else{
		header('Location:Login.php');	
			}
	?>
		<div class="col-md-3" id='move'>
		<ul class="nav nav-pills nav-stacked">
		<li class="active"><a href="manage.php">Home</a></li>
		<li ><a href="editteam.php">Edit Team</a></li>
		<li ><a href="players.php">Manage your Team</a></li>
		<li><a href="choosecaptain.php">Choose your captain</a></li>
		<li><a href="showpoints.php">Show My Points</a></li>
		</ul>
		</div>
		
		</body>
		
		</html>