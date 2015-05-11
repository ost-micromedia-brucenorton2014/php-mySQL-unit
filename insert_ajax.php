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
  <div class="container">
    <section class="row">
      <article class="col-sm-12 ">
      	<h1>insert via AJAX</h1>
	      <div id="formArea">
					
					<p>insert stuff into the form</p>
					<form action="" id="insert_form" method="post">
						<p>
							<label for="userName">Name</label><br>
							<input type="text" id="userName" name="userName" placeholder="Name">
						</p>
						<p>
							<label for="userEmail">Email</label><br>
							<input type="text" id="userEmail" name="userEmail" placeholder="Email">
						</p>
						<p>
							<label for="userMessage">Message</label><br>
							<textarea id="userMessage" name="userMessage" placeholder="message"></textarea>
						</p>
						<input type="submit" id="submitButton" name="submitButton" value="save info">
					</form>				
			</div>
 		</article>
    </section>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://code.jquery.com/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../../bootstrap-3.2.0/dist/js/bootstrap.min.js"></script> 
<script src="../../../js/index2014.js"></script>
<script src="insert_ajax.js"></script>
</body>
</html>