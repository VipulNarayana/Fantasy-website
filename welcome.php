<html>

<?php
ob_start();
session_start();

require_once('connection.php');

?>


<?php
if($_SESSION['user']) {
?>
<h3>Welcome <?php echo $_SESSION['user']; ?> </h3>
Click here to <a href="logout.php" tite="Logout">Logout.</a>
<a href="manage.php"<button class="btn btn-info" type="button" id="button">PLAY NOW</button></a>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link href="css/try.css" rel="stylesheet">
</head>
<body>
<div id="back">
<p>Hi</p>
</div>
</body>
</htmL>
<?php
}
else
{
	
header('Location:Login.php');	
}
?>
</td>
</tr>
</body>
</html>