<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Tara Stevenson">
	<link rel="shortcut icon" href="includes/ico/favicon.png">

	<title>EDSL Clubs</title>

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
				<div id="sidebar" class="sidebar-offcanvas sidebar-affix"><!-- this wraps all the stuff on the side make sure you put side bar stuff between HERE -->
					<div class="well sidebar-nav">
						<p>To sort and display Clubs; click the heading of the column you want to order by.</p>
						<p>Click on the club to view their teams and players.</p>
						<button type="button" class="btn btn-primary btn-xs btn-block" onclick="document.location = 'form.php';">Add Club</button>
					</div>
				</div>
				<!-- AND HERE or you are going to have a bad time -->
			</div><!--/span-->
			<!-- END SIDEBAR -->

			<!-- END MAIN -->
			<div class="col-xs-12 col-sm-9">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<h1>EDSL Clubs</h1>
						<div class="table-responsive">
							<table class="table table-hover sortable pointer">
								<thead>
									<tr>
										<th>Club Name </th>
										<th>Address </th>
										<th>Suburb </th>
										<th>Post Code</th>
										<th>Telephone</th>
										<th># Teams</th>
									</tr>
								</thead>
								<tbody>
									<tr onclick="document.location = '#.html';">
										<td>Ringwood Soccer Club</td>
										<td>Elliott Ave</td>
										<td>Ringwood</td>
										<td>3210</td>
										<td>0445 258 147</td>
										<td>3</td>
									</tr>
									
									<tr onclick="document.location = '#.html';">
										<td>Mitcham Sports Center</td>
										<td>258 Qwerty Rd</td>
										<td>Mitcham</td>
										<td>3698</td>
										<td>03 9874 1236</td>
										<td>2</td>
									</tr>
									<tr onclick="document.location = 'club.html';">
										<td>Hawthorn Club</td>
										<td>Glenferrie Oval, Linda Crescent</td>
										<td>Hawthorn</td>
										<td>3122</td>
										<td>03 9874 5684</td>
										<td>3</td>
									</tr>
								</tbody>
							  </table>
						</div>
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
	<script src="includes/js/sorttable.js"></script>
</body>
</html>
