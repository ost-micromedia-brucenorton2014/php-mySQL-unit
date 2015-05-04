<?php
	include  '_includes/connect.php';
	//echo("<br>insert.php");
		$tbl = "Bruce_app";
	//get posted info (if any)
		if(!empty($_REQUEST["userName"])){
			$userName = $_REQUEST["userName"];
		}
		if(!empty($_REQUEST["userEmail"])){
			$userEmail = $_REQUEST["userEmail"];
		}
		if(!empty($_REQUEST["userMessage"])){
			$userMessage = $_REQUEST["userMessage"];
		}
		//echo("requests: $userName, $userEmail, $userMessage");
	//write query
		$query = "INSERT INTO $tbl (userName, userEmail, userMessage) VALUES (?, ?, ?)";
	//prepare statement
		if($insertStmt = $mysqli -> prepare($query)){
			//bind parameters, execute, get affected_rows
			$insertStmt->bind_param("sss", $userName, $userEmail, $userMessage);
			$insertStmt->execute();
			$insertRows = $insertStmt->affected_rows;
			//echo("inserted $insertRows");
			echo("<br>Thanks $userName we have saved your message $userMessage");

		}else{
			echo("<br>Oops there was an error: $insertStmt->error");
			echo("<br>$mysqli->error");
		}
?>