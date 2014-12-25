<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customer Relationship Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Styles -->
  	<link href='assets/css/chosen.css' rel='stylesheet' tyle="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/theme/avocado.css" rel="stylesheet" type="text/css" id="theme-style">
	<link href="assets/css/prism.css" rel="stylesheet/less" type="text/css">
	<link href='assets/css/fullcalendar.css' rel='stylesheet' tyle="text/css">
	<link href='assets/css/custom.css' rel='stylesheet' tyle="text/css">
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
	<style type="text/css">
		body { padding-top: 102px; }
	</style>
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">	
	<!-- JavaScript/jQuery, Pre-DOM -->
	<script src="assets/js/jquery.min.js"></script> 
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="assets/js/charts/excanvas.min.js"></script>
	<script src="assets/js/charts/jquery.flot.js"></script>
	<script src="assets/js/jquery.jpanelmenu.min.js"></script>
	<script src="assets/js/jquery.cookie.js"></script>
	<script src="assets/js/avocado-custom-predom.js"></script>
	 <!--custom-->
	<script src="assets/js/custom/jquery.validate.js"></script>
	<script src="assets/js/custom/jquery.metadata.js"></script>
    <link href='assets/css/custom/screen.css' rel='stylesheet' tyle="text/css">
	<!-- HTML5, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
        <link rel="shortcut icon" href="assets/img/favicon.ico" >
</head>
<body>
	<!-- Top Fixed Bar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a href="#">
					<button type="button" class="btn btn-navbar mobile-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</a>
                            <a class="brand" href="home.php">
                                <img src="assets/img/logo.png" />
                            </a>
				<!-- / Logo / Brand Name -->
				<!-- User Navigation -->
				<ul class="nav pull-right">
												
					<!-- User Navigation: User -->
                                        <li class="text-3d">CUSTOMER RELATIONSHIP MANAGEMENT</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user icon-white"></i> 
							<span class="hidden-phone"><?php echo $name;?></span>
						</a>
					</li>
					<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
					<!-- / User Navigation: User -->
				</ul>
			</div>
			<!-- / Top Fixed Bar: Container -->
		</div>
		<!-- / Top Fixed Bar: Navbar Inner -->
	</div>
	<!-- / Top Fixed Bar -->