<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Tara Stevenson">
	<link rel="shortcut icon" href="includes/ico/favicon.png">

	<title>EDSL - Hawthorn Club</title>

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
					<div class="panel panel-primary">
						<div class="panel-heading">MVP</div>
						<div class="panel-body">
							Well done to <a href="#">Nick Hulkenburg </a><br/>
							for winning the Rosberg Medal!<br/>
							<br/>
							The Rosberg Medal is awarded to the most valuable player in the finals.
						</div>
					</div>
				</div>
				<!-- AND HERE or you are going to have a bad time -->
			</div><!--/span-->
			<!-- END SIDEBAR -->

			<!-- END MAIN -->
			<div class="col-xs-12 col-sm-9">
			<br/>
			<div class="row">
				<div class="col-sm-3 col-lg-3">
					<button type="button" class="btn btn-primary btn-block" onclick="document.location = 'form.php';">Edit Club</button>
				</div>
				<div class="col-sm-3 col-lg-3">
					<button type="button" class="btn btn-default btn-block">Remove Club</button>
				</div>
				<div class="col-sm-3 col-lg-3">
					<button type="button" class="btn btn-primary btn-block" onclick="document.location = 'addAdmin.php';">Add Admin</button>
				</div>
				<div class="col-sm-3 col-lg-3">
					<button type="button" class="btn btn-primary btn-block">Add Player</button>
				</div>	
			</div><!--/row-->	
			
			<h1>Hawthorn</h1>
				<div class="row">
				
					<!--<div class="col-sm-6 col-lg-6">
						<iframe class="clubMap" frameBorder='0' src='http://a.tiles.mapbox.com/v3/tara185.map-k6dabkws.html'></iframe>
					</div>/iframe-->
					
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<address>
							<strong>Home Ground</strong><br/>
							Glenferrie Oval<br/>
							Linda Crescent <br/>
							Hawthorn  <br/>
							VIC 3122 <br/>
							<strong><abbr title="Phone">P: </abbr></strong>(03) 9456 9857<br/>
						</address>
					</div><!--/club address-->	
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<address>
							<strong>Clubrooms</strong><br/>
							148 Glenferrie Rd <br/>
							Hawthorn  <br/>
							VIC 3122 <br/>
							<strong><abbr title="Phone">P: </abbr></strong>(03) 9456 7890<br/>
							<strong><abbr title="Email">E: </abbr></strong>
							<a href="mailto:#">hc@edsl.org.au</a>
						</address>
					</div><!--/club address-->	
			
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<address>
							<strong>President </strong> <br/>
							Joe Bloggs<br/>
							0425 367 981<br/>
							<a href="mailto:#">jb@hc.org.au</a><br/>
							<button type="button" class="btn btn-default btn-xs ">Remove Admin</button>
						</address>
					</div><!--/admin-->
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<address>
							<strong>Secretary </strong> <br>
							Jeff Blunders<br/>
							0425 741 852<br/>
							<a href="mailto:#">jb@hc.org.au</a><br/>
							<button type="button" class="btn btn-default btn-xs">Remove Admin</button>
						</address>
					</div><!--/admin-->
				</div><!--/row-->	
				
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Division</th>
									<th>Team</th>
									<th>Players</th>
								</tr>
							</thead><!--/table head-->
							<tbody>
								<tr>
									<td><a href="#">Division 1</a></td>
									<td><a href="#">Lions</a></td>
									<td>
										<ul class="list-unstyled">
											<li><a href="#"><b>02</b> Seb Vettel</a></li>
											<li><a href="#"><b>08</b> Frank Alonso</a></li>
											<li><a href="#"><b>85</b> Kim Richards</a></li>
											<li><a href="#"><b>12</b> Nick Hulkenburg</a></li>
										</ul>
									</td>
								</tr><!--/table row-->
								<tr>
									<td><a href="#">Division 2</a></td>
									<td><a href="#">Roosters</a></td>
									<td>
										<ul class="list-unstyled">
											<li><a href="#"><b>98</b> Max Chilton</a></li>
											<li><a href="#"><b>14</b> Patrick Head</a></li>
											<li><a href="#"><b>09</b> Adrian Simonds</a></li>
											<li><a href="#"><b>11</b> Derick Wurtz</a></li>
										</ul>
									</td>
								</tr><!--/table row-->
								<tr>
									<td><a href="#">Division 3</a></td>
									<td><a href="#">Roosters</a></td>
									<td class="dl-horizontal">
										<ul class="list-unstyled">
											<li><a href="#"><b>08</b> Lewis Hamburg</a></li>
											<li><a href="#"><b>34</b> Mark Stevens</a></li>
											<li><a href="#"><b>43</b> Rick Lovette</a></li>
											<li><a href="#"><b>45</b> Jackie Stuart</a></li>
											<li><a href="#"><b>13</b> Martin Toff</a></li>
											<li><a href="#"><b>02</b> Jimmie Marcos</a></li>
											<li><a href="#"><b>77</b> Billie Hyde</a></li>
										</ul>
									</td>
								</tr><!--/table row-->
								<tr>
									<td>Other</td>
									<td></td>
									<td class="dl-horizontal">
										<ul class="list-unstyled">
											<li><a href="#"><b> </B>Fred White</a></li>
											<li><a href="#">Jack Black</a></li>
											<li><a href="#">Joe Bloggs</a></li>
											<li><a href="#">Jeff Blunders</a></li>
										</ul>
									</td>
								</tr><!--/table row-->
							</tbody><!--/table body-->
						</table><!--/table-->
					</div><!--/span-->
				</div><!--/row-->
			
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
	<script>window.jQuery || document.write('<script src="js/jquery-2.0.0.min.js"><\/script>')</script>
	<!--<![endif]-->
	<script src="includes/js/bootstrap.min.js"></script>
	<script src="includes/js/offcanvas.js"></script>
</body>
</html>
