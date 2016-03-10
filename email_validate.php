<?php
if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		if(!empty($_POST['email']))
		{
			if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
				{
					echo "Enter valid email address ";
				}
			else
				{
					echo "Valid";
				}
		}
	}

?>