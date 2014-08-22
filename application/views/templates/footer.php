<!-- =========================
   FOOTER             
============================== -->

<footer>
<div class="container">
	
	
	<!-- COMPANY EMAIL-->
	<div class="col-md-2 company-details">
		 
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
		
		<p><a href="mailto:getinvolved@coderoute.co.uk">getinvolved@coderoute.co.uk</a></p>
		 
		 
		 
		 <p>©2013 coderoute<br/>All rights reserved.</p>
		<?php /*
		<ul class="social">
			
			<li><a href=""><i class="icon-facebook"></i></a></li>
			<li><a href=""><i class="icon-twitter-alt"></i></a></li>
			<li><a href=""><i class="icon-linkedin"></i></a></li>
			<li><a href=""><i class="icon-behance"></i></a></li>
			<li><a href=""><i class="icon-dribbble"></i></a></li>
			 
		</ul>
		 */
			 ?>
		 
	</div>
</div> <!-- / END CONTAINER -->


</footer> <!-- / END FOOOTER  -->

<!-- SCRIPTS -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>

<script src="xjs/jquery.nav.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.vegas.min.js"></script>
<script src="js/coderoute.js"></script>

<?php 
	if($page=='contact'){
?>

<script src="js/form-validator/jquery.form-validator.js"></script>
<script>
	
var $messages = $('#error-container');
	
$.validate({
  validateOnBlur : false, // disable validation when input looses focus
  scrollToTopOnError : true, // Set this property to true if you have a long form
  errorMessagePosition : 'top',
  
});

</script>

<?php
}
?>


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