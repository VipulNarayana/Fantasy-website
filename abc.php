<?php 

require('connection.php');
require('core.inc.php');

if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
	echo "U r logged in";
}
else
{
	 include('loginform.inc.php');
}
	

?>