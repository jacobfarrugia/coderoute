<?php

include "online.php";

?>
<!doctype html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta name="description" content="" />
<meta name="keywords" content="learn to code, web development, code school"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>coderoute bootcamp | learn to code</title>
 
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


<!-- FB TRACKING -->
<meta property="fb:admins" content="100006220965627" />



<!-- WEBFONT -->
<?php if ($online){ ?> 
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple|PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<?php } ?>

<!--[if lt IE 9]>
			<script src="<?=base_url();?>js/html5shiv.js"></script>
			<script src="<?=base_url();?>js/respond.min.js"></script>
		<![endif]-->

<!-- JQUERY -->
 
<?php if($online){ ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
	<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<?php }else{ ?> 
	<script src="<?=base_url();?>js/jquery.min.js"></script>
<?php } ?>

</head>


<body>

<!-- =========================
   HOME SECTION       
============================== -->
<header id="<?=$page;?>" class="header">



<!-- TOP BAR -->
	<div role="banner" class="navbar navbar-inverse bs-docs-nav fixed" id="main-nav">
		<div class="container">
			<div class="navbar-header responsive-logo">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="<?=base_url();?>" class="navbar-brand">
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
				
				<li >
					<a class="apply typeform-share link" href="https://coderoute.typeform.com/to/klqHXi" data-mode="2" target="_blank">Apply</a></li>
			</ul>
			</nav>
		</div>
	</div>
	<!-- / END TOP BAR -->