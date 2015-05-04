<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>php mySQLi prepared statments</title>

</head>

<body>
<?php
	include  '_includes/connect.php';
	
	//define and select table
		$tblTest = "Bruce_app";//change to your table i.e. andreaTable
		$displayQuery = "SELECT $tblTest.ID, $tblTest.userName, $tblTest.userEmail, $tblTest.userMessage FROM $tblTest";
		
		//get table info
		if($displayStmt = $mysqli-> prepare($displayQuery)){
			// execute prepared statement
			$displayStmt->execute();
			$displayStmt->store_result();
			$numrows = $displayStmt->num_rows;
			echo ("<br/>results: $numrows<br/>");
			
			 // bind results
			 $displayStmt->bind_result($idResult, $usernameResult, $userEmailResult, $userMessageResult);
			
			// fetch comments
			while ($displayStmt->fetch()) {
				echo("$idResult, $usernameResult $userEmailResult, $userMessageResult<br>");
				
			}//end while
		}else{
			echo("<br>Error description: " . mysqli_error($mysqli));
			
		}
	echo("<br>displayStmt error: ".$displayStmt->error);
?>

</body>
</html>

</body>
</html>