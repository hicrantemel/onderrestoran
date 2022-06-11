<?php 

session_start(); 
if (isset($_SESSION["kullanici_adi"])) {
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/images/required/ico/favicon.ico">
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/required/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/required/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/required/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/images/required/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="assets/images/required/ico/favicon.png">

	<title>Circloid - Responsive HTML Admin Template</title>

	<!-- Required CSS Files -->
	<link type="text/css" href="assets/css/required/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.css" rel="stylesheet" />
	<link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css" rel="stylesheet" />
	<link type="text/css" href="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/required/mCustomScrollbar/jquery.mCustomScrollbar.min.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/required/icheck/all.css" rel="stylesheet" />
	<link type="text/css" href="assets/fonts/metrize-icons/styles-metrize-icons.css" rel="stylesheet">

	<!-- Optional CSS Files -->
	<link type="text/css" href="assets/css/optional/jqvmap/jqvmap.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/optional/jqvmap/circloid-jqvmap.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/optional/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/optional/fullcalendar/circloid-fullcalendar.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/optional/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print" />
	<link type="text/css" href="assets/css/optional/bootstrap-datetimepicker.min.css" rel="stylesheet" />
	<!-- add CSS files here -->

	<!-- More Required CSS Files -->
	<link type="text/css" href="assets/css/styles-core.css" rel="stylesheet" />
	<link type="text/css" href="assets/css/styles-core-responsive.css" rel="stylesheet" />

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/required/misc/ie10-viewport-bug-workaround.js"></script>

	<!--[if IE 7]>
	<link type="text/css" href="assets/css/required/misc/style-ie7.css" rel="stylesheet">
	<script type="text/javascript" src="assets/fonts/lte-ie7.js"></script>
	<![endif]-->
	<!--[if IE 8]>
	<link type="text/css" href="assets/css/required/misc/style-ie8.css" rel="stylesheet">
	<![endif]-->
	<!--[if lte IE 8]>
	<script type="text/javascript" src="assets/css/required/misc/excanvas.min.js"></script>
	<![endif]-->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container-fluid">
		<!-- START Header Container -->
		<div id="header-container">
			<div class="header-bar navbar navbar-inverse" role="navigation">
				<!-- NOTE TO READER: Accepts the following class(es) "navbar-fixed-top" class -->
				<div class="container">
					<div class="navbar-header">
						<!-- START logo -->

						<!-- END logo -->

						<!-- START Mobile Menu Toggle -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- END Mobile Menu Toggle -->


						<!-- START Header Info Container -->
						<div class="header-info">
							<!-- START Header User Profile -->
							<div class="header-profile">
								<!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
								<ul class="header-profile-menu">
									<li>
										<a href="#" class="top">
											<span class="header-profile-menu-icon">
												<img src="images/onder1.png" width="60" height="60" alt="39x39" />
											</span>
											<?php echo $_SESSION["kullanici_adi"]; ?>
											<span class="main-menu-text">
												<i class="icon icon-arrow-down-bold-round icon-size-small"></i>
											</span>
										</a>
										<ul>
											<li> <?php 
												echo"<a href='exit.php'>
													<span aria-hidden='true' class='icon icon-arrow-curve-right' style='color:black;'></span>
													<span class='main-text'>Çıkış</span>
												</a> "; ?>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<!-- END Header User Profile-->


						</div>
						<!-- END Header Info Container -->

					</div>
				</div>
			</div>
		</div>
		<!-- END Header Container -->

		<!-- START Body Container -->
		<div id="body-container">

			<!-- START Left Column -->
			<div id="left-column" class="">
				<!-- NOTE TO READER: Accepts the following class(es) "menu-icon-only", "fixed" class -->
				<div id="mainnav">
					<ul class="mainnav">
						<!-- NOTE TO READER: Accepts the following class(es) "animate" class -->
						<li class="menu-item-top">
							<a href="admin.php" class="top">
								<span class="main-menu-icon">
									<span aria-hidden="true" class="icon icon-grid-big" style="color:#ffa733;"></span>
								</span>
								<span class="main-menu-text">Ana Sayfa</span>
							</a>
						</li>

						<li class="menu-item-top">
							<a href="#" class="top">
								<span class="main-menu-icon">
									<span aria-hidden="true" class="icon icon-list-square" style="color:#ffa733;"></span>
								</span>
								<span class="main-menu-text">Menüler</span>
							</a>
							<ul>
								<li><a target="ortaAlan" href="etyem.php">Et Yemekleri</a></li>
								<li><a target="ortaAlan" href="sebze.php">Sebze Yemekleri</a></li>
								<li><a target="ortaAlan" href="corba.php">Çorbalar</a></li>
								<li><a target="ortaAlan" href="icecek.php">İcecekler</a></li>
								<li><a target="ortaAlan" href="tatli.php">Tatlılar</a></li>
								<li><a target="ortaAlan" href="borek_pide.php">Börek&Pide</a></li>
							</ul>
						</li>

						<li class="menu-item-top">
							<a target="ortaAlan" href="rezervas.php" class="top">
								<span class="main-menu-icon">
									<span aria-hidden="true" class="icon icon-text-center" style="color:#ffa733;"></span>
								</span>
								<span class="main-menu-text">Rezervasyon</span>
							</a>
							<ul>
								<li><a target="ortaAlan" href="rezervas.php">Rezervasyonlar</a></li>
								<li><a target="ortaAlan" href="onayrezer.php">Onaylanan Rezervasyon</a></li>
								<li><a target="ortaAlan" href="redrezer.php">Reddedilen Rezervasyon</a></li>
							</ul>
						</li>

						<li class="menu-item-top">
							<a target="ortaAlan" href="#" class="top">
								<span class="main-menu-icon">
									<span aria-hidden="true" class="icon icon-telephone" style="color:#ffa733;"></span>
								</span>
								<span class="main-menu-text">İLETİŞİM</span>
							</a>
							<ul>
								<li><a target="ortaAlan" href="okunmayanilet.php">Okunmayan Mesajlar</a></li>
								<li><a target="ortaAlan" href="okunanilet.php">Okunan Mesajlar</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Left Column -->

			<!-- START Right Column -->
			<div id="right-column">
				<div class="right-column-content">
					<iframe name="ortaAlan" src="takip.php" style="width: 100%; height: 800px; border:0cm;">

					</iframe>
				</div>
				<!-- START Footer Container -->
				<div id="footer-container">
					<div class="footer-content">
						&copy; <a href="#?ref=Base5Builder">Circloid</a> was made with <span style="color:#FF0000;">&#10084;</span> and supported by - <a href="http://base5builder.com/" target="_blank" style="font-weight:300;color:#ffffff;background:#1d1d1d;padding:0 3px;">Base<span style="color:#ffa733;font-weight:bold">5</span>Builder</a>
					</div>
				</div>
				<!-- END Footer Container -->
			</div>
			<!-- END Right Column -->

		</div>
		<!-- END Body Container -->
	</div><!-- /.container -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Required JS Files -->
	<script type="text/javascript" src="assets/js/required/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="assets/js/required/jquery-ui-1.11.0.custom/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/required/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/required/jquery.easing.1.3-min.js"></script>
	<script type="text/javascript" src="assets/js/required/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="assets/js/required/misc/jquery.mousewheel-3.0.6.min.js"></script>
	<script type="text/javascript" src="assets/js/required/misc/retina.min.js"></script>
	<script type="text/javascript" src="assets/js/required/icheck.min.js"></script>
	<script type="text/javascript" src="assets/js/required/misc/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="assets/js/required/circloid-functions.js"></script>

	<!-- Optional JS Files -->
	<script type="text/javascript" src="assets/js/optional/circloid-functions-optional.js"></script>
	<script type="text/javascript" src="assets/js/optional/jqvmap/jquery.vmap.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/jqvmap/maps/jquery.vmap.world.js"></script>
	<script type="text/javascript" src="assets/js/optional/jqvmap/data/jquery.vmap.sampledata.js"></script> <!-- JQVMap Sample Data -->
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.JUMlib.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.tooltip.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.pie.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.stack.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.time.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/flot/jquery.flot.orderBars.js"></script>
	<script type="text/javascript" src="assets/js/optional/easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/misc/moment.js"></script>
	<script type="text/javascript" src="assets/js/optional/fullcalendar/fullcalendar.min.js"></script>
	<script type="text/javascript" src="assets/js/optional/bootstrap-datetimepicker.min.js"></script>
	<!-- add optional JS plugin files here -->

	<!-- REQUIRED: User Editable JS Files -->
	<script type="text/javascript" src="assets/js/script.js"></script>
	<!-- add additional User Editable files here -->

	<!-- Demo JS Files -->
	<script type="text/javascript" src="assets/js/demo-files/index.js"></script>

	<?php  }
	
	else {
		header("location:giris.php");
	}
	
	?>
</body>

</html>