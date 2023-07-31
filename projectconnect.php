<?php
	$servername ='localhost';
	$user ='root';
	$pass='';
	$db ='mcmdav';
	$conn=mysqli_connect($servername, $user, $pass ,$db);
	 if(!$conn)
 	{die("unable to connect:".mysql_error());}
?>