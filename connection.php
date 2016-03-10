<?php

$servername="localhost";
$username="fantasy";
$password="";

	$dbc=mysql_connect($servername,$username,$password) or die('Could not connect Database');
$database="fantasy";
	$db=mysql_select_db($database,$dbc) or die('Could not select Database');
	?>