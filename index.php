<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		  </div>
		</div>
	</nav>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h1 class="text-center"><a  href="index.php">Sim Owner Details</a></h1><br>
		<h2 class="text-primary">Enter Sim Number And Search</h2>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<br />
			<br />
			<form class="form-inline" method="POST" action="index.php">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Enter your CNIC or Number Here" name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php'?>
		</div>
		<footer>
			<h3 class="text-center">Developed by: Rashid Rafi</h3>
		</footer>
	</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>