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
		$ID = $_REQUEST['ID'];
	//write query
		$query = "SELECT $tbl.ID, $tbl.userName, $tbl.userEmail, $tbl.userMessage FROM $tbl WHERE $tbl.ID =$ID";
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
			//echo("<br>results: $IDResult, $nameResult, $emailResult, $messageResult <a href='update_form.php?ID=".$IDResult."'>update</a>");
		
?>
  <div class="container">
    <section class="row">
      <article class="col-sm-12 ">
	      <div id="formArea">
					<h1>insert</h1>
					<p>insert stuff into the form</p>
					<div id="formArea">
					<form action="update.php" id="update_form" method="post">
						<p>
							<label for="userName">Name</label><br>
							<input type="text" id="userName" name="userName" value="<?php echo $nameResult ?>">
						</p>
						<p>
							<label for="userEmail">Email</label><br>
							<input type="text" id="userEmail" name="userEmail" value="<?php echo $emailResult ?>">
						</p>
						<p>
							<label for="userMessage">Message</label><br>
							<textarea id="userMessage" name="userMessage" value="<?php echo $messageResult ?>"></textarea>
						</p>
						<input type="hidden" id="ID" name="ID" value="<?php echo($ID) ?>">
						<input type="submit" id="updateButton" name="updateButton" value="update info">
					</form>
					</div>				
			</div>
 		</article>
    </section>
  </div>
  <?php } //end while statement?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../../bootstrap-3.2.0/dist/js/bootstrap.min.js"></script> 
<script src="insert_ajax.js"></script>
</body>
</html>