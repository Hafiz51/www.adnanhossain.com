<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Photographer | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photographer html template">
	<meta name="keywords" content="photographer, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css')?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<header class="header-section hs-bd">
		<a href="index.html" class="site-logo"><img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo"></a>
		<div class="header-controls">
			<button class="nav-switch-btn"><i class="fa fa-bars"></i></button>
			<button class="search-btn"><i class="fa fa-search"></i></button>
		</div>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About the Artist </a></li>
			<li>
				<a href="#">Portfolio</a>
				<ul class="sub-menu">
					<li><a href="portfolio.html">Portfolio 1</a></li>
					<li><a href="portfolio-1.html">Portfolio 2</a></li>
					<li><a href="portfolio-2.html">Portfolio 3</a></li>
				</ul>
			</li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="elements.html">Elements</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li class="search-mobile">
				<button class="search-btn"><i class="fa fa-search"></i></button>
			</li>
		</ul>
	</header>