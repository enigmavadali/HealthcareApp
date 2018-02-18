<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>

		<script src='js/check.js'></script>
		<!-- Basic -->
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>	

		<title>HealthBuddy</title>	

		<!-- Favicon -->
		<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon' />
		<link rel='apple-touch-icon' href='img/apple-touch-icon.png'>

		<!-- Mobile Metas -->
		<meta name='viewport' content='width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>

		<!-- Web Fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light' rel='stylesheet' type='text/css'>

		<!-- Vendor CSS -->
		<link rel='stylesheet' href='vendor/bootstrap/css/bootstrap.min.css'>
		<link rel='stylesheet' href='vendor/font-awesome/css/font-awesome.min.css'>
		<link rel='stylesheet' href='vendor/animate/animate.min.css'>
		<link rel='stylesheet' href='vendor/simple-line-icons/css/simple-line-icons.min.css'>
		<link rel='stylesheet' href='vendor/owl.carousel/assets/owl.carousel.min.css'>
		<link rel='stylesheet' href='vendor/owl.carousel/assets/owl.theme.default.min.css'>
		<link rel='stylesheet' href='vendor/magnific-popup/magnific-popup.min.css'>

		<!-- Theme CSS -->
		<link rel='stylesheet' href='css/theme.css'>
		<link rel='stylesheet' href='css/theme-elements.css'>
		<link rel='stylesheet' href='css/theme-blog.css'>
		<link rel='stylesheet' href='css/theme-shop.css'>

		<!-- Skin CSS -->
		<link rel='stylesheet' href='css/skins/skin-medical.css'>

		<!-- Theme Custom CSS -->
		<link rel='stylesheet' href='css/custom.css'>

		<!-- Head Libs -->
		<script src='vendor/modernizr/modernizr.min.js'></script>
		<style>
			table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}

		</style>
	</head>
	<body>

		<div class='body'>
			<header id='header' class='header-narrow' data-plugin-options='{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 35, 'stickySetTop': '-35px', 'stickyChangeLogo': false}'>
				<!--<div class='header-body'>
					<div class='header-top header-top header-top-style-3 header-top-custom'>
						<div class='container'>
							<nav class='header-nav-top pull-right'>
								<ul class='nav nav-pills'>
									<li class='hidden-xs'>
										<span class='ws-nowrap'><i class='icon-location-pin icons'></i> 1234 Street Name, City Name</span>
									</li>
									<li class='hidden-xs'>
										<span class='ws-nowrap'><i class='icon-envelope-open icons'></i> <a class='text-decoration-none' href='mailto:mail@example.com'>mail@example.com</a></span>
									</li>
									<li>
										<span class='ws-nowrap'><i class='icon-call-out icons'></i></i> (800) 123-4567</span>
									</li>
								</ul>
							</nav>
						</div>
					</div> -->
					<div class='header-container container'>
						<div class='header-row'>
							
							<div class='header-column'>
								<div class='header-row'>
									<div class='header-nav pt-xs'>
										<button class='btn header-btn-collapse-nav' data-toggle='collapse' data-target='.header-nav-main'>
											<i class='fa fa-bars'></i>
										</button>
										<div class='header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse'>
											<nav> 
												<ul class='nav nav-pills' id='mainNav'>
													<li class='dropdown-full-color dropdown-secondary'>
														<a href='index.php'>
															Home
														</a>
													</li>
													<?php if(!isset($_SESSION['username'])){echo"
													<li class='dropdown dropdown-full-color dropdown-secondary'>
														<a class='dropdown-toggle' href='doctor-sign_up.php'>
															Sign-Up
														</a>
														<ul class='dropdown-menu'>
															<li><a href='doctor-sign_up.php'>Sign-Up as Doctor</a></li>
															<li><a href='patient-sign_up.php'>Sign-Up as Patient</a></li>
															<li><a href='medical-sign_up.php'>Sign-Up as Medical Shop Owner</a></li>
														</ul>
													</li>
													<li class='dropdown dropdown-full-color dropdown-secondary'>
														<a class='dropdown-toggle' href='doctor-login.php'>
															Login
														</a>
														<ul class='dropdown-menu'>
															<li><a href='doctor-login.php'>Login as Doctor</a></li>
															<li><a href='patient-login.php'>Login as Patient</a></li>
															<li><a href='medical-login.php'>Login as Medical Shop Owner</a></li>
														</ul> ";}
														else{echo" 
															<li class='dropdown-full-color dropdown-secondary'>
														<a href='logout.php'>
															Logout
														</a>
															</li>
															";}
														?>
													
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>