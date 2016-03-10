<?php

require_once('connection.php');
$password=$_POST['password'];
$conf=$_POST['conf'];
$email=$_POST['email'];

if($password===$conf)
{

$query="UPDATE `login` SET `password` = '$password' WHERE `email`='$email'" ;
$result=mysql_query($query);

}
else
{
echo "U GOT TROLLED";
}
?>