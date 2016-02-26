<?php
$title = "Contact Us";
$desc = "Contact";
include("includes/header.php"); ?>

<main role="main" id="skipnav">
	<section class="contact">
		<a href="mailto:info@davisbrook.co.uk">
		<div class="contactarea"><img src="images/emailcircle.png" alt="Email - Davisbrook Ltd" />
		<h4>Email</h4>
		<h5>info@davisbrook.co.uk</h5>
		</div>
		</a>
		<a href="tel:01614397510">
		<div class="contactarea"><img src="images/phonecircle.png" alt="Phone Office - Davisbrook Ltd" />
		<h4>Phone</h4>
		<h5>01614 397510</h5>
		</div>
		</a>
		<a href="tel:07879495614">
		<div class="contactarea"><img src="images/mobilecircle.png" alt="Phone Mobile - Davisbrook Ltd" />
		<h4>Mobile</h4>
		<h5>07879 495614</h5>
		</div>
		</a>
		<a href="https://www.google.com/maps/place/Red+Roof+Estate+Agents/@53.4890665,-2.0911937,19.11z/data=!4m3!3m2!1s0x487ba3731077046b:0xddb85b2f4a3be646!4b1?hl=en-GB">
		<div class="contactarea"><img src="images/mapcircle.png" alt="Map Location - Davisbrook Ltd" />
		<h4>Address</h4>
		<h5>DavisBrook Ltd, Red Roofs, Church Lane, Woodford, Stockport, SK7 1RQ</h5>
		</div>
		</a>
	</section>
	<section id="contactform">
		<form class="contactform" name="contact" method="post" action="process.php" onSubmit="alert('Message Successfully Sent!')">
			<label for="Name">Name <span>*</span></label>
			<input type="text" name="Name" id="Name" size="30" required> 
			<label for="Email">Email <span>*</span></label>
			<input type="text" name="Email" id="Email" size="30" placeholder="" required> 
			<label for="Message">Message <span>*</span></label>
			<textarea name="Message" id="Message" placeholder="" required></textarea>
			<input id="submit" type="submit" name="submit" value="Send" />  
		</form>
	</section>
</main>


<?php include("includes/footer.php"); ?>