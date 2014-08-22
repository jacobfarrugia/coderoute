
	<div class="container page_intro">
		<!-- SECTION TITLE -->
		<!-- <h1 class="introx">About Coderoute</h1> -->
		<h1 class="introx">Get in touch</h1>

	</div>
	
</header> <!-- / END HOME SECTION  -->



<section class="contact-us" >
<div class="container">
	
<!-- CONTACT FORM-->
	<div class="row">
		<form role="form" action="<?=base_url();?>pages/enquiry" class="contact-form" method="post">
			<div>
			<div class="col-lg-4 col-sm-4">
				<input type="text" name="first-name" placeholder="First Name" class="form-control input-box" data-validation="length" data-validation-length="min2" data-validation-error-msg="We really want to know your first name">
			</div>
			<div class="col-lg-4 col-sm-4">
				<input type="text" name="last-name" placeholder="Last Name" class="form-control input-box" data-validation="length" data-validation-length="min2" data-validation-error-msg="We really want to know your last name">
			</div>
			<div class="col-lg-4 col-sm-4">
				<input type="email" name="email" placeholder="Your Email" class="form-control input-box" data-validation="email" data-validation-error-msg="We need your email so we can respond">
			</div>
			</div>
			
			<div class="col-md-12">
				<textarea name="message" class="form-control textarea-box" placeholder="Your Message"  data-validation="length" data-validation-length="min4" data-validation-error-msg="Let us know what you're getting in touch about"></textarea>
			</div>
			
			<div id="error-container"></div>
			
			<button class="btn btn-primary custom-button red-btn"  type="submit">Send Message</button>
		</form>
	</div>
	<!-- / END CONTACT FORM-->
	
</div>
</section>