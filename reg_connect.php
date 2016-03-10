<?php
	$servername="localhost";
	$username="fantasy";
	$password="";

	$dbc=mysql_connect($servername,$username,$password) or die('Could not connect to Database');

	$database="fantasy";
	$db=mysql_select_db($database,$dbc) or die('Could not select Database');
	if($db)

	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$confirm=$_POST['conf'];
	$screen=$_POST['screen'];
	$username=stripslashes($username);
	$password=stripslashes($password);
	$email=stripslashes($email);
	$confirm=stripslashes($confirm);
	$screen=stripslashes($screen);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$email= mysql_real_escape_string($email);
	$confirm = mysql_real_escape_string($confirm);
	$screen = mysql_real_escape_string($screen);

	$s=mysql_query("SELECT `screen` FROM `login` WHERE `screen`='$screen'");
	$c=mysql_fetch_assoc($s);


	$u=mysql_query("SELECT `username` FROM `login` WHERE `username`='$username'");
	$f=mysql_fetch_assoc($u);

	$e=mysql_query("SELECT `email` FROM `login` WHERE `email`='$email'");
	$k=mysql_fetch_assoc($e);

	if(($screen!=$c['screen']))
		{
			if(($confirm==$password))
				{
					if(($username!=$f['username']))
						{
							if(($email!=$k['email']))
								{
									$sql="INSERT INTO  `login` (`username`,`password`,`email`,`screen`) VALUES('$username','$password','$email','$screen')";
									$res=mysql_query($sql);
									include_once('success.php');
								}
							else
							{
								echo '<html><span style="color:black;font-family:Calibri;font-size:20px;">email already registered</span></html>';
								include_once("register.php");
							}
						}
					else
						{	
							echo '<html> <span style="color:black;font-family:Calibri;font-size:20px;">Username already exists</span></html>';
							include_once("register.php");
						}
				}
			else
				{
					echo '<html> <span style="color:black;font-family:Calibri;font-size:20px;">Password does not match</span></html>';
					include_once("register.php");
				}
			}
	else
	{
	echo '<html> <span style="color:black;font-family:Calibri;font-size:20px;">Screenname must be unique</span></html>';
	include_once("register.php");
	}



?>