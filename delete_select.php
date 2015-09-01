<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bruce Norton ( OST: Micromedia ) { Vanier College }</title>
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href="../../../bootstrap-3.2.0/dist/css/bootstrap.css" rel="stylesheet">
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
			$numrows = $displayStmt-> num_rows;
			echo("<br>results: $numrows");

		}
	//bind results
		$displayStmt->bind_result($IDResult, $nameResult, $emailResult, $messageResult);

	//fetch results
		while($displayStmt->fetch()){
			echo("<p>results: $IDResult, $nameResult, $emailResult, $messageResult <button class='btn' data-id='".$IDResult."'> delete </a></button></p>");
		}
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../../bootstrap-3.2.0/dist/js/bootstrap.min.js"></script> 
<script src="insert_ajax.js"></script>
</body>
</html>
