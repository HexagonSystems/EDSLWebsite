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
                <li>Recent Matches</li>
                <li class="active"><a href="#">Hawthorn FC vs Kew FC</a></li>
                <li class=""><a href="#">Caulfield FC vs Kooyung FC</a></li>
                <li><a href="#">Balwyn FC vs Abbotsford</a></li>
                <li><a href="#">Toorak FC vs Malvern FC</a></li>
              </ul>
            </div><!--/.well -->
            <div class="panel panel-primary sidebar-panel">
              <div class="panel-heading"><h4><a href="#">Kew FC</a></h4></div>
              <div class="panel-body">
                <h4>Stats</h4>
                <p>Ladder Position: 3<br />
                   Last Match Result: Win<br />
                   Next Match: Malvern FC</p>
                   <button class="btn" type="button">Club Home</button>
              </div>
            </div>
            <div class="panel panel-primary sidebar-panel">
              <div class="panel-heading"><h4><a href="#">Hawthorn FC</a></h4></div>
              <div class="panel-body">
                <h4>Stats</h4>
                <p>Ladder Position: 3<br />
                   Last Match Result: Win<br />
                   Next Match: Malvern FC</p>
                   <button class="btn" type="button">Club Home</button>
              </div>
            </div>
          </div>
          <!-- AND HERE or you are going to have a bad time -->
        </div><!--/span-->
        <!-- END SIDEBAR -->

        <!-- END MAIN -->
        <div class="col-xs-12 col-sm-9">
          <div class="row">
            <div class="page-header">
              <h1>Hawthorn FC <small><span class="label label-danger">vs</span></small> Kew FC</h1>              
            </div><!--/span-->
            <div class="col-sm-6">
              <p><strong>Date:</strong> 25/12/2013</p>
            </div><!--/span-->
            <div class="col-sm-6">
              <p><strong>Venue:</strong> Hawthorn Soccer Field <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-map-marker"></span><small>MAP</small></button></p>
            </div><!--/span-->
             <button type="button" class="btn btn-warning" data-toggle="modal" href="#enterResult">Enter Match Report</button>
          </div><!--/row-->
          <hr />
          <div class="row">
            <h2>Players</h2 >
            <div class="col-xs-6">
              <h2>Hawthorn FC</h2>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Position</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>20</td>
                      <td>Lawrence THOMAS</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Matthew FOSCHINI
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Adama TRAORE</td>
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Mark MILLIGAN</td>
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Leigh BROXHAM</td>
                        <td>M</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Guilherme FINKLER</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Jonathan BRU</td>
                        <td>G</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Marcos FLORES</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Archie THOMPSON</td>
                        <td>S</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>Adrian LEIJER</td>
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>17</td>
                        <td>Jason HOFFMAN</td>
                        <td>M</td>
                      </tr>
                    </tbody>
                  </table>
                </div>    
            </div><!--/span-->
            <div class="col-xs-6">
              <h2>Kew FC</h2>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Position</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>20</td>
                      <td>Lawrence THOMAS</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Matthew FOSCHINI
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Adama TRAORE</td>
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Mark MILLIGAN</td>
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Leigh BROXHAM</td>
                        <td>M</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>Guilherme FINKLER</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>Jonathan BRU</td>
                        <td>G</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>Marcos FLORES</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>Archie THOMPSON</td>
                        <td>S</td>
                      </tr>
                      <tr>
                        <td>23</td>
                        <td>Adrian LEIJER</td>
                        <td>D</td>
                      </tr>
                      <tr>
                        <td>17</td>
                        <td>Jason HOFFMAN</td>
                        <td>M</td>
                      </tr>
                    </tbody>
                  </table>
                </div>    
            </div><!--/span-->
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
  <!-- Modal -->
  <div class="modal fade" id="enterResult" tabindex="-1" role="dialog" aria-labelledby="enterResult" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Match Results</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
            <div class="col-sm-6">
              <h4>Hawthorn FC</h4>
            <div class="form-group">
              <label for="scoreTeam1Half1" class="col-lg-6 control-label">First Half</label>
              <div class="col-lg-6">
                <input type="number" class="form-control" id="scoreTeam1Half1" placeholder="0">
              </div>
            </div>
            <div class="form-group">
              <label for="scoreTeam1Half2" class="col-lg-6 control-label">Second Half</label>
              <div class="col-lg-6">
                <input type="number" class="form-control" id="scoreTeam1Half2" placeholder="0">
              </div>
            </div>
          </div>
            <div class="col-sm-6">
              <h4>Kew FC</h4>
              <div class="form-group">
              <label for="scoreTeam2Half1" class="col-lg-6 control-label">First Half</label>
              <div class="col-lg-6">
                <input type="number" class="form-control" id="scoreTeam2Half1" placeholder="0">
              </div>
            </div>
            <div class="form-group">
              <label for="scoreTeam2Half2" class="col-lg-6 control-label">Second Half</label>
              <div class="col-lg-6">
                <input type="number" class="form-control" id="scoreTeam2Half2" placeholder="0">
              </div>
            </div>
          </div>
              <div class="form-group">
                <label for="matchReport" class="control-label">Match Report</label>
                <textarea class="form-control" id="matchReport" rows="3"></textarea>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


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
