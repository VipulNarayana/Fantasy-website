<?php
session_start();
ob_start();
	$servername="localhost";
	$username="fantasy";
	$password="";

	$dbc=mysql_connect($servername,$username,$password) or die('Could not connect Database');

	$database="fantasy";
	$db=mysql_select_db($database,$dbc) or die('Could not select Database');

	$myusername=$_POST['user'];
	$mypassword=$_POST['key'];
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="select * from `login` where  `username`='".$myusername."' and  `password`='".$mypassword."'";
	$result=mysql_query($sql,$dbc);
	
	if(mysql_num_rows($result)>0)
		{
			$_SESSION['user']=$myusername;
			header("location:welcome.php");
			exit();		 
		}
	else
		{
	      include('error.php');
		  exit();
		}
?>