<?php

/* FIELDS

Name
Email
Phone
Which course (Oct, Jan)
Current situation (student. employed, recent grad, entrepreneur, unemployed)
More about you
	Why do you want to do this course
	Do you have any relevant techncial experience
How did you find out about us (google, facebook, from a friend, other)

*/
?>



	<div class="container page_intro">
		<!-- SECTION TITLE -->
		<!-- <h1 class="introx">About Coderoute</h1> -->
		<h1 class="intro">Apply </h1>

	</div>
	
</header> <!-- / END HOME SECTION  -->




<?php if(isset($enquiry_status) && ($enquiry_status)){ ?>
	


<section class="success-msg">
<div class="color-overlay">
	
 	<h3 class="container">Message sent!</h3> 
	<h4 class="container">We'll be in touch shortly.</h4> 
	
</div>
</section>  




<!-- Google Code for application form Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 965835395;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "MaKPCP7PoVYQg_XFzAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/965835395/?label=MaKPCP7PoVYQg_XFzAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

	
<?php }else{ ?>	





<section class="application" >
<div class="container" style="min-height:600px">

<br/><br/><br/>

<!-- Personal Info -->


<form role="form" action="<?=base_url();?>pages/application" class="contact-form" method="post">
<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
		<label>Your full name</label>
	</div>
	<div class="col-md-6">
		<input type="text" name="full-name" placeholder="Lucy, Andrew, Michelle, Peter?" value="<?php echo set_value('full-name'); ?>" class="form-control input-box <?=form_error('full-name') ? ' error ':'';?>" data-validation="length" data-validation-length="min2" data-validation-error-msg="We really would like to know your name">
	</div>

</div>

<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
	<label>Your email address</label>
	</div>
	<div class="col-md-6">
		<input type="text" name="email" placeholder="webguru@gmail.com" value="<?php echo set_value('email'); ?>" class="form-control input-box <?=form_error('email') ? ' error ':'';?>" data-validation="email" data-validation-error-msg="It would help if you gave us your email address">
	</div>

</div>


<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
		<label>Your phone number</label>
	</div>
	<div class="col-md-6">
		<input type="text" name="phone" placeholder="+44 0700 000 000" value="<?php echo set_value('phone'); ?>" class="form-control input-box <?=form_error('phone') ? ' error ':'';?>" data-validation="length" data-validation-length="min10" data-validation-error-msg="Tom likes to chat, he can't do that without your number">
	</div>
</div>




<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
		<label>Which course date are you interested in?</label>
	</div>
	<div class="col-md-2">
		<input  <?php if(set_value('course-date')=='jan-15' || set_value('course-date')=='' ){echo 'checked';} ?> type="radio" name="course-date" value="jan-15" data-validation="required" default data-validation-error-msg="We won't hold you to it, but it helps us to know which course you're interested in"> <label>12th January 2015</label>
	</div>
	<div class="col-md-2">
		<input <?php if(set_value('course-date')=='mar-15'){echo 'checked';} ?> type="radio" name="course-date" value="mar-15"> <label>9th March 2015</label>
	</div>
</div>



<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-8">
		<hr>
	</div>
</div>	


	
<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
		<label>Why do you want to do this course?</label>
	</div>
	<div class="col-md-6">
		<textarea name="reason" class="form-control textarea-box<?=form_error('reason') ? ' error ':'';?>" placeholder="Because I want to..."  data-validation="length" data-validation-length="min4" data-validation-error-msg="It really helps us to know what you're looking to achieve"><?php echo set_value('reason'); ?></textarea>
	</div>
</div>


<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
		<label>Do you have any relevenat technical experience?</label>
	</div>
	<div class="col-md-6">
		<textarea name="experience" class="form-control textarea-box<?=form_error('experience') ? ' error ':'';?>" placeholder="I already know a little HTML & CSS..."  data-validation="length" data-validation-length="min4" data-validation-error-msg="If you don't have any experience, that's cool, just let us know"><?php echo set_value('experience'); ?></textarea>
	</div>
</div>


<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-8">
		<hr>
	</div>
</div>	



<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
		<label>How did you hear about us?</label>
	</div>
	<div class="col-md-2">
		<input  type="radio" name="how-hear" value="facebook"> <label>Facebook</label>
	</div>
	<div class="col-md-2">
		<input type="radio" name="how-hear" value="google"> <label>Google</label>
	</div>

		<div class="col-md-2">
		<input type="radio" name="how-hear" value="linkedin"> <label>Linked-In</label>
	</div>
	
</div>

<div class="row">
	<div class="col-md-2  question "></div>
	<div class="col-md-2  question ">
	
	</div>
	

	<div class="col-md-2">
		<input type="radio" name="how-hear" value="other"> <label>Other</label>
	</div>
	
</div>


	<div id="error-container"></div>

	<div class="row buttons">
	<div class="col-md-12">		
		<button class="btn btn-primary custom-button red-btn"  type="submit">Submit your applicaiton</button>
	</div>
	</div>
</form>




	<!-- 
<div class="row">
	<div class="col-lg-4  question ">
	<p>Email</p>
	</div>
	<div class="col-lg-4 ">
		<input id="applikation_email" class="radius errorable required error" type="email" placeholder="Email 1" name="applikation[email]">
		<small class="error errorable">Please answer this question</small> 
	</div>
</div>

 

<div class='row'>
<div class='columns medium-4'>
<p>What is something you’d like to build? What are your thoughts on how to build it?</p>
</div>
<div class='columns medium-8 question'>
<input id="applikation_answers_attributes_6_question" name="applikation[answers_attributes][][question]" type="hidden" value="What is something you’d like to build? What are your thoughts on how to build it?" />
<textarea class="radius errorable required" id="applikation_answers_attributes_6_response" name="applikation[answers_attributes][][response]" rows="8" value="">
</textarea>
<small class='error errorable'></small>
</div>

 -->
</div>
</section>
<? } ?>