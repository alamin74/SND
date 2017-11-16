<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Bismillah Azmeri Flour Mill</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Team RAM
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="raw_product.php">
                        <i class="pe-7s-note2"></i>
                        <p>Raw Product</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="producing_product.php">
                        <i class="pe-7s-note2"></i>
                        <p>Produce Product</p>
                    </a>
                </li>
                <li>
                    <a href="sell_system.php">
                        <i class="pe-7s-cash"></i>
                        <p>Sells System</p>
                    </a>
                </li>
                <li>
                    <a href="stuff_info.html">
                        <i class="pe-7s-users"></i>
                        <p>Stuff Info</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="#">
                        <i class="pe-7s-rocket"></i>
                        <p>Team RAM</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

   <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="produce_view.php">View</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                        <li>
                           <a href="">
								<p class="hidden-lg hidden-md">View</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Producing Product</h4>
                                <p class="category">Daily Produce Product</p>
                            </div>



															<!--Form Start Here-->
						  <center>
				<div class="content table-responsive table-full-width">
                  <div class="content table-responsive table-full-width">
             <form class="form-horizontal" action="produce_con.php" method="post">



                 <div class="form-group">
		       <label class="control-label col-xs-5" for="category">Category:</label>
		       <div class="col-xs-4">
                    <select name="category">
                         <option value="select">Select..</option>
                         <option value="atta">Atta</option>
                         <option value="Moyda">Moyda</option>
                         <option value="suji">Suji</option>
                  </select>

		       </div>
		     </div>

                <div class="form-group">
		       <label class="control-label col-xs-5" for="date">Date</label>
		       <div class="col-xs-4">
		         <input type="Date" class="form-control" id="date" placeholder="Date" name="b">
		       </div>
		     </div>

		     <div class="form-group">
		       <label class="control-label col-xs-5" for="sack">Sack:</label>
		       <div class="col-xs-4">
		         <input type="text" class="form-control" id="sack" placeholder="Total sack" name="c">
		       </div>
		     </div>

		 		<div class="form-group">
		       <label class="control-label col-xs-5" for="price">Price:</label>
		       <div class="col-xs-4">
		         <input type="text" class="form-control" id="price" placeholder="Product Price" name="d">
		       </div>
		     </div>


		     <div class="form-group">
		       <div class="col-sm-offset-2 col-sm-10">
		         <button type="submit" class="btn btn-default">Submit</button>
		     </div>
		     </div>
		         </form>
		     </div>
             </div>
                 </center>
              </div>
                </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>

                                                 <!--Form End Here-->


    <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
