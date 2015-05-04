<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>php mySQLi prepared statments</title>

</head>

<body>
<?php
	include  '_includes/connect.php';
	
	//define table
		$tbl = "Bruce_app";//change to your table i.e. John_app

	//write query
		$query = "SELECT $tbl.ID, $tbl.userName, $tbl.userEmail, $tbl.userMessage FROM $tbl";
	//prepare statement, execute, store_result
		if($displayStmt = $mysqli->prepare($query)){
			$displayStmt->execute();
			$displayStmt->store_result();
			$numrows = $displayStmt->num_rows;
			echo("<br>results: $numrows");

		}
	//bind results
		$displayStmt->bind_result($IDResult, $nameResult, $emailResult, $messageResult);

	//fetch results
		while($displayStmt->fetch()){
			echo("<br>results: $IDResult, $nameResult, $emailResult, $messageResult");
		}
?>

</body>
</html>

</body>
</html>