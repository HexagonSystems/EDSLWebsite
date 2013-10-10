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
<style>
#map_canvas {
	width: 100%;
	height: 400px;
	margin: auto;
}
</style>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
	function initialize() {
		var map_canvas = document.getElementById('map_canvas');
		var map_options = {
			center : new google.maps.LatLng(44.5403, -78.5463),
			zoom : 8,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(map_canvas, map_options)
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
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
						<div class="panel-heading">Most Recent Game</div>
						<div class="panel-body">
							<h4>Tigers vs Dogs</h4>
							<div class="hexagon-scoreboard">
								<span class="hexagon-scoreboard-win">5</span> <span
									class="hexagon-scoreboard-lose">4</span>
							</div>
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
							<div class="panel-heading">Upcoming Game</div>
							<div class="panel-body">
								<h2>Tigers vs Cats</h2>
								Address: 123 Fish Street, AddressVIlle <br />
								Date: 01/11/2013
								Time: 6:00pm
								<br />
								<br />
								<button class="btn-primary">Get Directions</button>
								<br />
								<div id="map_canvas"></div>
							</div>
						</div>
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Future Games</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Morbi leo risus</li>
									<li class="list-group-item">Porta ac consectetur ac</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>
							</div>
						</div>
						
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<div class="panel-heading">Past Games</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">Cras justo odio</li>
									<li class="list-group-item">Dapibus ac facilisis in</li>
									<li class="list-group-item">Morbi leo risus</li>
									<li class="list-group-item">Porta ac consectetur ac</li>
									<li class="list-group-item">Vestibulum at eros</li>
								</ul>
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
