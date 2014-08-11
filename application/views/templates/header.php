<!doctype html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta name="description" content="Beautiful Responsive Animated OnePage Template" />
<meta name="keywords" content="Zerif, responsive, html, template, creative"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>coderoute developer bootcamp</title>
 
<!-- =========================
 FAV AND TOUCH ICONS  
============================== -->
<link rel="shortcut icon" href="<?=base_url();?>images/icons/favicon.ico">
<link rel="apple-touch-icon" href="<?=base_url();?>images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>images/icons/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS      
============================== -->
<link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url();?>css/owl.theme.css">
<link rel="stylesheet" href="<?=base_url();?>css/owl.carousel.css">
<link rel="stylesheet" href="<?=base_url();?>css/jquery.vegas.min.css">
<link rel="stylesheet" href="<?=base_url();?>css/animate.min.css">

<link rel="stylesheet" href="<?=base_url();?>assets/icon-fonts/styles.css"> 
<link rel="stylesheet" href="<?=base_url();?>css/pixeden-icons.css"> 

<!-- CUSTOM STYLES -->
<link rel="stylesheet" href="<?=base_url();?>css/styles.css">
<link rel="stylesheet" href="<?=base_url();?>css/responsive.css">



<!-- WEBFONT -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
			<script src="<?=base_url();?>js/html5shiv.js"></script>
			<script src="<?=base_url();?>js/respond.min.js"></script>
		<![endif]-->

<!-- JQUERY -->
 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 
</head>


<body>

<!-- =========================
   HOME SECTION       
============================== -->
<header id="<?=$page;?>" class="header">



<!-- TOP BAR -->
	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav" role="banner">
		<div class="container">
			<div class="navbar-header responsive-logo">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="./" class="navbar-brand">
				<img src="<?=base_url();?>images/logo.png" alt="Coderoute">
				</a>
			</div>
			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
			<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
				<?php foreach ($nav as $k=>$n){
					$c = ($k==$page) ? 'current':'';
					
					$k=($k=='home')?'':$k;
				?>
						<li class="<?=$c;?>"><a href="<?=base_url();?><?=$k;?>"><?=$n;?></a></li>
				<?php } ?>
				
				
				
			</ul>
			</nav>
		</div>
	</div>
	<!-- / END TOP BAR -->