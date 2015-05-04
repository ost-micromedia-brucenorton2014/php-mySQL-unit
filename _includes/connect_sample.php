<?php
	
	$host = "localhost";
	$user = "multimedia2015";
	$password = "****";
	$db = "multimedia2015";

	$mysqli = new mysqli($host, $user, $password, $db);

	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}else{
		echo("Conected successfully to $db as $user");
	}

?>
