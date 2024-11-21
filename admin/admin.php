<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="admin.php">Admin</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Finder Add Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Data</button>
			<a href="index.php" class="btn btn-primary">Update Data</a>
			<br />
			<br />
			<form class="form-inline" method="POST" action="admin.php">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php'?>
		</div>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Number</label>
								<input type="text" class="form-control" name="number" required="required"/>
								<label>Name</label>
								<input type="text" class="form-control" name="name" required="required"/>
								<label>Cnic</label>
								<input type="cnic" class="form-control" name="cnic" required="required"/>
							</div>
							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" style="resize:none; height:150px;" name="address" required="required"></textarea>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>