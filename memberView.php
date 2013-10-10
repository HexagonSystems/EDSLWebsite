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
							<li class="active"><a href="memberView.php">Personal Details</a></li>
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
						<h2>Fred Somebody</h2>
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">
								Personal <a href="memberEdit.php"
									class="btn btn-primary btn-sm pull-right">Edit</a>
							</div>
							<div class="panel-body">
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
								</form>
							</div>
						</div>

						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Team</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-lg-2 control-label">Team</label>
										<div class="col-lg-10">
											<p class="form-control-static">Tigers</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Join Date</label>
										<div class="col-lg-10">
											<p class="form-control-static">01/01/2013</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Matches Played</label>
										<div class="col-lg-10">
											<p class="form-control-static">27</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Contact</label>
										<div class="col-lg-10">
											<p class="form-control-static">0400 000 000</p>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Club</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-lg-2 control-label">Club Name</label>
										<div class="col-lg-10">
											<p class="form-control-static">Dummy Data</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Member Since</label>
										<div class="col-lg-10">
											<p class="form-control-static">01/01/2013</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Matches Played</label>
										<div class="col-lg-10">
											<p class="form-control-static">34</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Contact</label>
										<div class="col-lg-10">
											<p class="form-control-static">0400 000 000</p>
										</div>
									</div>
								</form>
							</div>
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
