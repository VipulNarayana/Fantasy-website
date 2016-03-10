<?php

if(isset($_POST['user']) && ($_POST['key']))
{
$myusername=$_POST['user'];
	$mypassword=$_POST['key'];
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	
	if(!empty($myusername) && !empty($mypassword))
	{
	$sql="select `S.No` from `login` where  `username`='".$_POST['user']."' and  `password`='".$_POST['key']."'";
	if($query_run=mysql_query($sql))
	{
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==0)
			
		{
		echo "Invalid";	
		}
		else if($query_num_rows==1)
		{
			$user_id=mysql_result($query_run,0,'S.No');
			$_SESSION['id']=$user_id;
			header('Location:abc.php');
		}
	}
	}
}
		

?>

<form action="<?php echo $current_file;?>"   method="post">
		
			<input type="text" name="user"  placeholder="Enter Username" required="true" pattern="[a-zA-Z0-9]{1,}">
			
			
			
			<input type="password" name="key"  placeholder="Enter Password" required="true" pattern="[a-zA-Z0-9]{1,}">
			
			
			<input type="submit" >
			</div>
			</div>
		</form>