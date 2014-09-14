
	<div class="container page_intro">
		<!-- SECTION TITLE -->
		<!-- <h1 class="introx">About Coderoute</h1> -->
		<h1 class="intro">Get in touch</h1>

	</div>
	
</header> <!-- / END HOME SECTION  -->




<?php if(isset($enquiry_status) && ($enquiry_status)){ ?>
	


<section class="success-msg">
<div class="color-overlay">
	
 	<h2 class="container">Message sent!</h2> 
	<h3 class="container">We'll be in touch shortly.</h3> 
	
</div>
</section>  

	
<?php }else{ ?>	
	
<section class="contact-us " >
<div class="container">
	
	
	
	  
	
<!-- CONTACT FORM-->
	<div class="row">
		<form role="form" action="<?=base_url();?>pages/enquiry" class="contact-form" method="post">
			<?php if( validation_errors() ){ ?>
			
				<div class="form-error alert alert-danger">
					<strong>Something's not quite right!</strong>
					<?=validation_errors();?>
				</div>	
	
			<? } ?>
			
			<div>
			<div class="col-lg-4 col-sm-4">
				<input type="text" name="first-name" placeholder="First Name" value="<?php echo set_value('first-name'); ?>" class="form-control input-box <?=form_error('first-name') ? ' error ':'';?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="We really want to know your first name">
			</div>
			<div class="col-lg-4 col-sm-4">
				<input type="text" name="last-name" placeholder="Last Name" value="<?php echo set_value('last-name'); ?>" class="form-control input-box <?=form_error('last-name') ? ' error ':'';?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="We really want to know your last name">
			</div>
			<div class="col-lg-4 col-sm-4">
				<input type="email" name="email" placeholder="Your Email" value="<?php echo set_value('email'); ?>"" class="form-control input-box <?=form_error('email') ? ' error ':'';?>" data-validation="email" data-validation-error-msg="We need your email so we can respond">
			</div>
			</div>
			
			<div class="col-md-12">
				<textarea name="message" class="form-control textarea-box<?=form_error('message') ? ' error ':'';?>" placeholder="Your Message"  data-validation="length" data-validation-length="min4" data-validation-error-msg="Let us know what you're getting in touch about"><?php echo set_value('message'); ?></textarea>
			</div>
			
			<div id="error-container"></div>
			
			<button class="btn btn-primary custom-button red-btn"  type="submit">Send Message</button>
		</form>
	</div>
	<!-- / END CONTACT FORM-->
</div>
</section>	
<?php } ?>	
	
