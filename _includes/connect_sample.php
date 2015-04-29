<?php
	$output = "connect.php include file accessed<br />";
	$host = "localhost";
	$user ="multimedia2015"; //this is the user name given
	$password = "*****";//replace this with the password
	$db ="multimedia2015"; //database is the same as the user name for simplicity
	$mysqli = new mysqli($host, $user, $password, $db);
	
	/* check connection */
	if (mysqli_connect_errno()) {
		$output .= "connection failed: ". mysqli_connect_error();
		echo($output);
		exit();
	}else{
		$output .= "connected to $db as $user";
		echo($output);
	}

?>