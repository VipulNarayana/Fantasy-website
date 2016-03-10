<?php 
require_once "mail.php";
require_once('connection.php');

$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$screen=$_POST['screen'];


while($row=mysql_fetch_array($result))
{
	if($row['email']===$email)
	{
	$from = "mnvipul@gmail.com";
	$to=$_POST['email'];
    $subject = "Recover Password!";
    $body = "http://localhost/fantasy/recover.php";

    $host = "ssl://smtp.gmail.com";
    $port = "465";
    $username = "mnvipul";
    $password = "vikas1911";

    $headers = array ('From' => $from,
      'To' => $to,
      'Subject' => $subject);
    $smtp = Mail::factory('smtp',
      array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
      echo("<p>" . $mail->getMessage() . "</p>");
    } else {
      echo("<p>Message successfully sent!</p>");
    }
	
	}
	else{
	echo "Email Not registered";	
	}
}