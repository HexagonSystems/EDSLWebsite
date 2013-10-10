<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="includes/ico/favicon.png">

<title>EDSL</title>

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
			<div class="col-xs-6 col-sm-3 col-md-3 colmun-offcanvas"
				role="navigation">
				<div id="sidebar" class="sidebar-offcanvas sidebar-affix">
					<!-- this wraps all the stuff on the side
            make sure you put side bar stuff between HERE -->
					<div class="well sidebar-nav">
						<ul class="nav">
							<li>My Profile</li>
							<li class="active"><a href="memberEdit.php">Personal
									Details</a></li>
							<li><a href="memberGames.php">My Games</a></li>
							<li><a href="#">Security</a></li>
						</ul>
					</div>
					<!--/.well -->
					<div class="panel panel-primary">
						<div class="panel-heading">Upcoming Game</div>
						<div class="panel-body">
							Tigers vs Cats<br /> Location: 123 Fish Street, AddressVIlle
						</div>
					</div>
				</div>
				<!-- AND HERE or you are going to have a bad time -->
			</div>
			<!--/span-->
			<!-- END SIDEBAR -->

			<!-- END MAIN -->
			<div class="col-xs-12 col-sm-9">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<h2>Fred Somebody<a href="memberView.php" class="btn btn-primary btn-sm pull-right">Cancel</a></h2>
						

						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">My Information</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputFName" class="col-lg-2 control-label">First
											Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputFName"
												placeholder="First Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputLName" class="col-lg-2 control-label">Last
											Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputLName"
												placeholder="Last Name">
										</div>
									</div>
									<div class="form-group">
										<label for="inputLName" class="col-lg-2 control-label">Password</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" id="inputLName"
												placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="inputLName" class="col-lg-2 control-label">Confirm
											Password</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" id="inputLName"
												placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-lg-2 control-label">Email</label>
										<div class="col-lg-10">
											<input type="email" class="form-control" id="inputEmail"
												placeholder="email@email.com">
										</div>
									</div>
									<div class="form-group">
										<label for="inputMobile" class="col-lg-2 control-label">Mobile</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputMobile"
												placeholder="0400 000 000">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<a data-toggle="modal" href="#modal_confirmUpdate"
												class="btn btn-primary btn-sm">Update</a>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Security</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputFName" class="col-lg-2 control-label">Contact</label>
										<div class="input-group">
											<span class="input-group-addon"> <input type="radio">
											</span> <input class="form-control" id="disabledInput" type="text"
												placeholder="Display contact information to public" disabled>
										</div>
										<!-- /input-group -->
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<a data-toggle="modal" href="#modal_confirmUpdate"
												class="btn btn-primary btn-sm">Update</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
			</div>
			<!--/span-->
			<!-- END MAIN -->


		</div>
		<!--/row-->

		<hr>

		<footer>
			<p>&copy; Company 2013</p>
		</footer>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal_confirmUpdate" tabindex="-1"
		role="dialog" aria-labelledby="addTaskInput" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">&times;</button>
					<h4 class="modal-title">Confirm Changes</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="col-lg-2 control-label">First Name</label>
							<div class="col-lg-10">
								<p class="form-control-static">Fred</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Last Name</label>
							<div class="col-lg-10">
								<p class="form-control-static">Somebody</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<p class="form-control-static">email@email.com</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Contact</label>
							<div class="col-lg-10">
								<p class="form-control-static">0400 000 000</p>
							</div>
						</div>
						<div class="form-group">
							<label for="inputLName" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" id="inputLName"
									placeholder="Please enter your orignal password">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button id="createCommentButton" type="button"
						class="btn btn-primary" data-dismiss="modal">Submit</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!--/.container-->
	<!-- END CONTAINER -->

	<!-- JavaScript
  ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!--[if lte IE 8]>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
  <![endif]-->

	<!--[if gt IE 8]><!-->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script>
		window.jQuery
				|| document
						.write('<script src="js/jquery-2.0.0.min.js"><\/script>')
	</script>
	<!--<![endif]-->
	<script src="includes/js/bootstrap.min.js"></script>
	<script src="includes/js/offcanvas.js"></script>
</body>
</html>
