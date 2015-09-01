<?php
error_reporting(E_ALL);
	include  '_includes/connect.php';
	//echo("<br>insert.php");
		$tbl = "Bruce_app";
	//get posted info (if any)
		$ID = $_REQUEST["ID"];

	//write query
		$query = "DELETE FROM $tbl WHERE $tbl.ID=$ID";
	//prepare statement
		if($stmt = $mysqli -> prepare($query)){
			//bind parameters, execute, get affected_rows
			$stmt->execute();
			$affectedrows = $stmt->affected_rows;
			echo("<br>updated: $affectedrows");
			if($affectedrows > 0){
				echo("<br>Thanks, this user has been deleted.");
			}
		}else{
			echo("<br>Oops there was an error: $stmt->error");
			echo("<br>$mysqli->error");
		}
		$stmt->close();
		$mysqli->close();
?>