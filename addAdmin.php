<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Tara Stevenson">
	<link rel="shortcut icon" href="includes/ico/favicon.png">

	<title>EDSL - Add Admin</title>

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
				</div>
				<div class="well sidebar-nav">
					<p>To sort and display Clubs; click the heading of the column you want to order by.</p>
					<p>Click on the member to edit their role.</p>
				</div><!--/.well -->
				<!-- AND HERE or you are going to have a bad time -->
			</div><!--/span-->
			<!-- END SIDEBAR -->

			<!-- END MAIN -->
			<div class="col-xs-12 col-sm-9">
				<h1>Add Administrator</h1>
				
				<form class="form-horizontal">
					<div class="form-group">
						<label for="searchMember" class="col-lg-2 control-label">Search Member</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="searchMember" placeholder="Search Member">
						</div>
						<button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
					
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<table class="table table-hover sortable pointer">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Role</th>
								</tr>
							</thead><!--/table head-->
							<tbody>
								<tr onclick="document.location = '#.html';">
									<td>Fred</td>
									<td>White</td>
									<td><td>
								</tr><!--/table row-->
								<tr  onclick="document.location = '#.html';">
									<td>Joe</td>
									<td>Bloggs</td>
									<td>President<td>
								</tr><!--/table row-->
							</tbody>
						</table>
					</div>
				</div>
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
