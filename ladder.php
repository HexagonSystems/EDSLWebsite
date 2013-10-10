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
				<div class="col-xs-6 col-sm-3 col-md-3 colmun-offcanvas" role="navigation">
					<div id="sidebar" class="sidebar-offcanvas sidebar-affix"><!-- this wraps all the stuff on the side
						make sure you put side bar stuff between HERE -->
						
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								Choose which season and division to view.
							</div>
							
							<ul>
								<li class="liOpen">Season 2011
									<ul>
										<li><h5>Division 1</h5></li>
										<li>Division 2</li>
										<li>Division 3</li>
									</ul>
								</li>
								
								<li>Season 2012
									<ul>
										<li>Division 1</li>
										<li>Division 2</li>
										<li>Division 3</li>
									</ul>
								</li>
								
								<li>Season 2013
									<ul>
										<li>Division 1</li>
										<li>Division 2</li>
										<li>Division 3</li>
									</ul>
								</li>
							</ul>
													
						</div>
					</div>
				<!-- AND HERE or you are going to have a bad time -->
				</div><!--/span-->
				<!-- END SIDEBAR -->

				<!-- START MAIN -->
				<div class="col-xs-12 col-sm-9">
					<h2>Ladder</h2>
					
					<div class="row">
					
						<div class="col-sm-12 col-lg-12 margin10">
							<div class="panel-heading">
								<h3>Season [2011] [Division 1]</h3>
							</div>
							
							<!-- Ladder will be generated in a for loop -->
							<!-- START Ladder -->
							<table class="margin10">
								<tr>
									<th>Rank:</th>
									<th>Team:</th>
									<th>Points:</th>
									<th>W:</th>
									<th>D:</th>
									<th>L:</th>
									<th>F:</th>
									<th>A:</th>
									<th>GD:</th>
								</tr>
								
								<tr>
									<td>1</td>
									<td>Team 3</td>
									<td>12</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>2</td>
									<td>Team 8</td>
									<td>12</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>3</td>
									<td>Team 1</td>
									<td>10</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>4</td>
									<td>Team 6</td>
									<td>10</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>5</td>
									<td>Team 11</td>
									<td>8</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>6</td>
									<td>Team 4</td>
									<td>8</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>7</td>
									<td>Team 9</td>
									<td>8</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>8</td>
									<td>Team 2</td>
									<td>6</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>9</td>
									<td>Team 7</td>
									<td>4</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>10</td>
									<td>Team 12</td>
									<td>4</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>11</td>
									<td>Team 5</td>
									<td>2</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
								
								<tr>
									<td>12</td>
									<td>Team 10</td>
									<td>0</td>
									<td>2</td>
									<td>1</td>
									<td>0</td>
									<td>4</td>
									<td>2</td>
									<td>2</td>
								</tr>
							</table>
							<!-- END Ladder -->
						</div>
						
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
