<?php

require_once('phpab.php'); 


$strapline_test = new phpab('strapline_1'); // set the name of the a/b test
$strapline_test->add_variation('variation_1', '<p>We teach ya real good stuff</p>'); // add a variation
$strapline_test->add_variation('variation_2', '<p>Better than learning to code from your mamma</p>'); // add a variation

?>

<!doctype html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta name="description" content="Beautiful Responsive Animated OnePage Template" />
<meta name="keywords" content="Zerif, responsive, html, template, creative"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>coderoute developer training</title>
 
<!-- =========================
 FAV AND TOUCH ICONS  
============================== -->
<link rel="shortcut icon" href="images/icons/favicon.ico">
<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS      
============================== -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/jquery.vegas.min.css">
<link rel="stylesheet" href="css/animate.min.css">

<link rel="stylesheet" href="assets/icon-fonts/styles.css"> 
<link rel="stylesheet" href="css/pixeden-icons.css"> 

<!-- CUSTOM STYLES -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- WEBFONT -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

<!-- JQUERY -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>


<body>
<!-- =========================
   PRE LOADER       
============================== -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>
<!-- =========================
   HOME SECTION       
============================== -->
<header id="home" class="header">
	
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
				<img src="images/logo.png" alt="Zerif">
				</a>
			</div>
			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;">
			<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
				<li><a href="#home">Home</a></li>
				<li><a href="#focus">Focus</a></li>
				<li><a href="#works">Works</a></li>
				<li><a href="#aboutus">About Us</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#pricingtable">Pricing</a></li>
				<li><a href="#features">Features</a></li>
				<li><a href="#products">Products</a></li>
				<li><a href="#testimonials">Testimonials</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			</nav>
		</div>
	</div>
	<!-- / END TOP BAR -->
	
	
	<?php include('pages/home.php'); ?>
	
	
	
</header> <!-- / END HOME SECTION  -->



<!-- =========================
   FOCUS SECTION      
============================== -->

<section class="focus" id="focus">
<div class="container">
	
	<?php include('pages/focus.php'); ?>
	
</div> <!-- / END CONTAINER -->
</section>  <!-- / END FOCUS SECTION -->


<!-- =========================
   SEPARATOR ONE      
============================== -->

<section class="separator-one">
<div class="color-overlay">
	
	<?php include('pages/separator-generic.php');?>
	
</div>
</section>  <!-- / END SEPARATOR -->


<!-- =========================
   PROJECTS SECTION      
============================== -->

<section class="works" id="works">
<div class="container">
	
	<?php include('pages/projects.php') ;?>
	
</div> <!-- / END CONTAINER -->
</section> <!-- / END PROJECTS SECTION -->


<!-- =========================
   ABOUT US SECTION   
============================== -->

<section class="about-us" id="aboutus">
<div class="container">
	
	<?php include('pages/about.php');?>
	
</div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->

<!-- =========================
   STATS              
============================== -->

<section class="stats">
	<div class="container">
		
		<?php include('pages/separator-stats.php');?>
		
</div>
</section>  <!-- / END STATS -->



<!-- =========================
   OUR TEAM SECTION   
============================== -->

<section class="our-team" id="team">
<div class="container">
	
	
	<?php include('pages/teams.php');?>

	
</div> <!-- / END CONTAINER -->
</section> <!-- / END OUR TEAM SECTION -->


<!-- =========================
   PACKAGES SECTION   
============================== -->

<section class="packages" id="pricingtable">
<div class="container">
	
	<?php include('pages/packages.php');?>
		
	
</div> <!--END CONTAINER  -->
</section> <!-- END PACKAGES SECTION -->

<!-- =========================
   FEATURES SECTION   
============================== -->
<section class="features" id="features">
<div class="container">
		
		
	<?php include('pages/features.php');?>	
		

</div> <!-- / END CONTAINER -->
</section> <!-- / END FEATURES SECTION -->

<!-- =========================
   PRODUCTS SECTION   
============================== -->

<section class="products" data-type="background" data-speed="1" id="products">
<div class="color-overlay">
	<div class="container">
			
	<?php include('pages/products.php');?>	
	
	</div> <!-- / END CONTAINER -->
</div> <!-- / END COLOR OVERLAY -->
</section> <!-- / END PRODUCTS SECTION -->

<!-- =========================
   NEWSETTER          
============================== -->

<section class="newsletter">
<div class="container">
	
	<?php include('pages/separator-newsletter.php');?>	
	
</div> <!-- / END CONTAINER -->
</section> <!-- / END NEWSLETTER SECTION -->

<!-- =========================
   TESTIMONIAL        
============================== -->

<section class="testimonial" id="testimonials">
<div class="container">
	  
	<?php include('pages/testimonials.php');?>	 
	
</div> <!-- / END CONTAINER -->
</section> <!-- / END TESTIMONIAL SECTION -->

<!-- =========================
   PURCHASE NOW       
============================== -->

<section class="purchase-now">
<div class="container">
	
	<?php include('pages/separator-cta.php');?>	
	
</div>
</section> <!-- / END PURCHASE NOW SECTION-->

<!-- =========================
   CONTACT US         
============================== -->

<section class="contact-us" id="contact">
<div class="container">
	
	<?php include('pages/contact.php');?>	
	
</div> <!-- / END CONTAINER -->
</section> <!-- / END CONTACT US SECTION-->

<!-- =========================
   FOOTER             
============================== -->

<footer>
<div class="container">
	
	
	<!-- COMPANY EMAIL-->
	<div class="col-md-2 company-details">
		<div class="icon-top green-text">
		<i class="icon-fontawesome-webfont-329"></i>
		</div>
		 getinvolved@codroute.co.uk
	</div>
	
	
	<!-- COMPANY ADDRESS-->
	<div class="col-md-5 company-details">
		<?php /*
		<div class="icon-top red-text">
		    <i class="icon-fontawesome-webfont-302"></i>
		</div>
		PO Box 16122 Collins Street West, Victoria 8007 Australia
		 */ ?>
	</div>
	
		
	
	<!-- COMPANY PHONE NUMBER -->
	<div class="col-md-2 company-details">
	<?php /*	<div class="icon-top blue-text">
		<i class="icon-fontawesome-webfont-101"></i>
		</div>
		+613 0000 0000
	 * */ 
	 ?>
	</div>
	 
	
	<!-- SOCIAL ICON AND COPYRIGHT -->
	<div class="col-lg-3 col-sm-3 copyright">
		<ul class="social">
			<li><a href=""><i class="icon-facebook"></i></a></li>
			<li><a href=""><i class="icon-twitter-alt"></i></a></li>
			<li><a href=""><i class="icon-linkedin"></i></a></li>
			<?php /*
			<li><a href=""><i class="icon-behance"></i></a></li>
			<li><a href=""><i class="icon-dribbble"></i></a></li>
			 */
			 ?>
		</ul>
		 ©2013 coderoute
	</div>
</div> <!-- / END CONTAINER -->


</footer> <!-- / END FOOOTER  -->

<!-- SCRIPTS -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.vegas.min.js"></script>
<script src="js/zerif.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53130449-1', 'auto');
  ga('send', 'pageview');

</script>



</body>
</html>