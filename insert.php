<?php
	include  '_includes/connect.php';
	//echo("<br>insert.php");
		$tbl = "Bruce_app";
	//get posted info (if any)	
		$userName = $_REQUEST["userName"];
		$userEmail = $_REQUEST["userEmail"];
		$userMessage = $_REQUEST["userMessage"];

	//echo("<br>after requests: $userName, $userEmail, $userMessage");
	if($insertStmt = $mysqli-> prepare("INSERT INTO $tbl (userName, userEmail, userMessage) VALUES (?, ?, ?)")){
		$insertStmt->bind_param('sss', $userName, $userEmail, $userMessage);
		
		/* execute prepared statement */
		$insertStmt->execute();
		$insertedRows = $insertStmt->affected_rows;

		/* close statement and connection */
		$insertStmt->close();
		echo("<br>Thanks $userName we have saved your message: $userMessage");
	}else{
	
		echo("<br>Uh oh... Error inserting info: ". $insertStmt->error);
	}			

?>