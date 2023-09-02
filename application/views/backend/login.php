<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<h1 class="title text-bold">Kelompok 2</h1>
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-l text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
					</div>
					<div class="panel-body">
						<form method="post" action="<?php echo site_url('Auth/login') ?>">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="kd_admin" type="text" placeholder="Masukkan Username" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<label class="pull-left">Password</label>
								<div class="input-group input-group-icon">
									<input name="password_admin" type="password" placeholder="Masukkan Password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">

								<div class="col-sm-7 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Login</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Login</button>
								</div>
							</div>
							<div class="clearfix">

								<a href="pages-recover-password.html" class="pull-right">Lupa Password?</a>
							</div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
			<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap/js/bootstrap.js"></script>
			<script src="<?php echo base_url(); ?>assets/backend/vendor/nanoscroller/nanoscroller.js"></script>
			<script src="<?php echo base_url(); ?>assets/backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="<?php echo base_url(); ?>assets/backend/vendor/magnific-popup/magnific-popup.js"></script>
			<script src="<?php echo base_url(); ?>assets/backend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>assets/backend/javascripts/theme.init.js"></script>

	</body><img src="<?php echo base_url(); ?>http://www.ten28.com/fref.jpg">
</html>
