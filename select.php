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
		$tblTest = "Bruce_test";//change to your table i.e. andreaTable
		$displayQuery = "SELECT $tblTest.userID, $tblTest.email, $tblTest.messages FROM $tblTest";
		
		//get table info
		if($displayStmt = $mysqli-> prepare($displayQuery)){
			// execute prepared statement
			$displayStmt->execute();
			$displayStmt->store_result();
			$numrows = $displayStmt->num_rows;
			echo ("<br/>results: $numrows<br/>");
			
			 // bind results
			 $displayStmt->bind_result($idResult, $emailResult, $messageResult);
			
			// fetch comments
			while ($displayStmt->fetch()) {
				echo("$idResult, $emailResult, $messageResult <br>");
				
			}//end while
		}//end if
	
?>

</body>
</html>