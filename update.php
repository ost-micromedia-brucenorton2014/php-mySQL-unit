<?php
error_reporting(E_ALL);
	include  '_includes/connect.php';
	//echo("<br>insert.php");
		$tbl = "Bruce_app";
	//get posted info (if any)
		$ID = $_REQUEST["ID"];
		if(!empty($_REQUEST["userName"])){
			$userName = $_REQUEST["userName"];
		}
		if(!empty($_REQUEST["userEmail"])){
			$userEmail = $_REQUEST["userEmail"];
		}
		if(!empty($_REQUEST["userMessage"])){
			$userMessage = $_REQUEST["userMessage"];
		}
		echo("<br>requests: $userName, $userEmail, $userMessage, $ID");
	//write query
		$query = "UPDATE $tbl SET $tbl.userName = ?, $tbl.userEmail = ?, $tbl.userMessage = ? WHERE $tbl.ID =?";
	//prepare statement
		if($updateStmt = $mysqli -> prepare($query)){
			//bind parameters, execute, get affected_rows
			$updateStmt->bind_param("sssi", $userName, $userEmail, $userMessage, $ID);
			$updateStmt->execute();
			$insertRows = $updateStmt->affected_rows;
			echo("<br>updated: $insertRows");
			if($insertRows > 0){
				echo("<br>Thanks $userName we have updated your info $userEmail, $userMessage");
			}
		}else{
			echo("<br>Oops there was an error: $updateStmt->error");
			echo("<br>$mysqli->error");
		}
		$updateStmt->close();
		$mysqli->close();
?>