<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Tara Stevenson">
	<link rel="shortcut icon" href="includes/ico/favicon.png">

	<title>Form - EDSL</title>

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="includes/css/bootstrap.edsl.css" />
	<link href="includes/css/edsltheme.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="includes/js/html5shiv.js"></script>
	<script src="includes/js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<?php include "includes/nav.php"; ?>
	<!-- END HEADER -->
	
	<!-- CONTAINER -->
	<div class="container">
		<div class="row row-offcanvas row-offcanvas-left">

			<!-- START SIDEBAR -->
			<div class="col-xs-6 col-sm-3 col-md-3 colmun-offcanvas" role="navigation">
				<div id="sidebar" class="sidebar-offcanvas sidebar-affix"><!-- this wraps all the stuff on the side
					make sure you put side bar stuff between HERE -->
					<div class="well sidebar-nav">
						<ul class="nav">
							<li>Division 1</li>
							<li><a href="#">Lions</a></li>
							<button type="button" class="btn btn-default btn-xs btn-block">Remove Team</button>
							<li>Division 2</li>
							<li><a href="#">Roosters</a></li>
							<button type="button" class="btn btn-default btn-xs btn-block">Remove Team</button>
							<li>Division 3</li>
							<li><a href="#">Eagles</a></li>
							<button type="button" class="btn btn-default btn-xs btn-block">Remove Team</button>
						</ul>
						<br/>
						<button type="button" class="btn btn-primary btn-block">Add Team</button>
					</div><!--/.well -->
				</div>
				<!-- AND HERE or you are going to have a bad time -->
			</div><!--/span-->
			<!-- END SIDEBAR -->

			<!-- END MAIN -->
			<div class="col-xs-12 col-sm-9">
				<h1>Alter Club List</h1>
				<form class="form-horizontal" id="clubForm">

					<div class="form-group">
						<label for="cName" class="col-lg-3 control-label">Club Name</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="cName" placeholder="Club Name" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="cAddress" class="col-lg-3 control-label">Address</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="cAddress" placeholder="Mailing Address" required >
						</div>
					</div>
					
					<div class="form-group">
						<label for="cSuburb" class="col-lg-3 control-label">Suburb</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="cSuburb" placeholder="Mailing Suburb" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="cState" class="col-lg-3 control-label">State</label>
						<div class="col-lg-9">
							<select class="form-control" name="cState">
								<option value="">Select State</option>
								<option value="ACT">ACT</option>
								<option value="NSW">NSW</option>
								<option value="NT">NT</option>
								<option value="QLD">QLD</option>
								<option value="SA">SA</option>
								<option value="TAS">TAS</option>
								<option value="VIC">VIC</option>
								<option value="WA">WA</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="cPcode" class="col-lg-3 control-label">Postcode</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="cPcode" placeholder="Mailing Postcode" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="cEmail" class="col-lg-3 control-label">Club Email</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="cEmail" placeholder="Club Email" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="cPhone" class="col-lg-3 control-label">Club Phone</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="cPhone" placeholder="Club Phone" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="clubCheckbox" class="col-lg-4 control-label">Home Ground Address As Above</label>
						<div class="col-lg-8">
							<div class="checkbox">
								<input type="checkbox"  onclick="fillMailDetails(this.form)" name="clubCheckbox" >
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="gName" class="col-lg-3 control-label">Ground Name</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="gName" placeholder="Ground Name">
						</div>
					</div>
					
					<div class="form-group">
						<label for="gAddress" class="col-lg-3 control-label">Ground Address</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="gAddress" placeholder="Ground Address" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="gSuburb" class="col-lg-3 control-label">Ground Suburb</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="gSuburb" placeholder="Ground Suburb" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="gState" class="col-lg-3 control-label">Ground State</label>
						<div class="col-lg-9">
							<select class="form-control" name="gState">
								<option value="">Select State</option>
								<option value="ACT">ACT</option>
								<option value="NSW">NSW</option>
								<option value="NT">NT</option>
								<option value="QLD">QLD</option>
								<option value="SA">SA</option>
								<option value="TAS">TAS</option>
								<option value="VIC">VIC</option>
								<option value="WA">WA</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="gPcode" class="col-lg-3 control-label">Ground Postcode</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="gPcode" placeholder="Ground Postcode" required>
						</div>
					</div>
					
					<div class="form-group">
						<label for="gPhone" class="col-lg-3 control-label">Ground Phone</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="gPhone" placeholder="Ground Phone">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-3">
							<div class=" col-lg-4">
								<button type="button" class="btn btn-danger btn-block">Cancel</button>
							</div>
							<div class="col-lg-offset-4 col-lg-4">
								<button type="submit" class="btn btn-primary btn-block">Save</button>
							</div>
						</div>
					</div>
				</form><!--/form-->
			</div><!--/span-->
			<!-- END MAIN -->
		</div><!--/row-->
		<hr>
		<footer>
			<p>&copy; Company 2013</p>
		</footer>
	</div><!--/.container-->
	<!-- END CONTAINER -->

	<!-- JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!--[if lte IE 8]>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
	<![endif]-->

	<!--[if gt IE 8]><!-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.0.0.min.js"><\/script>')</script>
	<!--<![endif]-->
	<script src="includes/js/bootstrap.min.js"></script>
	<script src="includes/js/offcanvas.js"></script>
	<script src="includes/js/scripts.js"></script>
	

</body>
</html>
