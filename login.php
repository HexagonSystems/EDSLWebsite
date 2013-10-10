<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="includes/ico/favicon.png">

  <title>Match Report - EDSL</title>

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
	<?php include "includes/nav.php";?>
	<!-- END HEADER -->
		
    <!-- CONTAINER -->
    <div class="container">
      <hr />
      <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
          <form class="form-signin">
          <h2 class="form-signin-heading">Sign in</h2>
          <input type="text" class="form-control" placeholder="Email address" autofocus="">
          <input type="password" class="form-control" placeholder="Password">
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
          <small><a href="#">Forgotten your password?</a><small>
        </div>
        <!--
        <div class="col-sm-3 col-md-3 col-lg-2">
          <h5 class="form-signin-heading">Register New Account</h5>
          <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
          </form>
        </div>-->
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
