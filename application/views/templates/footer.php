<!-- =========================
   FOOTER             
============================== -->

<footer>
<div class="container">
	
	
	<!-- COMPANY EMAIL-->
	<div class="col-md-9 company-details">
		<? /*
		 <ul >
			<li><a href="">blahh</a></li>
			<li><a href="">bhahahsdf</a></li>
		</ul>

		 */ ?>
	</div>
	

	 
	
	<!-- SOCIAL ICON AND COPYRIGHT -->
	<div class="col-lg-3 col-sm-3 copyright">
		
		<p><a href="mailto:getinvolved@coderoute.co.uk">getinvolved@coderoute.co.uk</a></p>
		<p>©2013 coderoute<br/>All rights reserved.</p>
		
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