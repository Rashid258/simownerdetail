<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="admin.php">IR Sim DB Finder</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h2 class="text-primary">Result...</h2>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="admin.php" class="btn btn-success">Back</a>
		<?php
			require 'conn.php';
			if(ISSET($_REQUEST['id'])){
				$query = mysqli_query($conn, "SELECT * FROM `searchdb` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
		?>
				<h2><?php echo $fetch['number']?></h2>
				<h2><?php echo $fetch['name']?></h2>
				<h2><?php echo $fetch['cnic']?></h2>
				<h2><?php echo $fetch['address']?></h2>
		<?php
			}
		?>
		
	</div>
</body>
</html>