<?php
$title = "Home";
$desc = "";
include("includes/header.php"); ?>

<main role="main" id="skipnav">
	<section class="propertiescontainer">
		<div class="properties flexcenter" id="homeproperty1"><h2><a href="3bed.php">3 Bed Properties</a></h2></div>
		<div class="properties flexcenter" id="homeproperty2"><h2><a href="4bed.php">4 Bed Properties</a></h2></div>
		<div class="properties flexcenter" id="homeproperty3"><h2><a href="5bed.php">5 Bed Properties</a></h2></div>
		<div class="properties flexcenter" id="homeproperty4"><h2><a href="6bed.php">6 Bed Properties</a></h2></div>
		<div class="properties flexcenter" id="homeproperty5"><h2><a href="7bed.php">7 Bed Properties</a></h2></div>
		<div class="properties flexcenter" id="homeproperty6"><h2><a href="8bed.php">8 Bed Properties</a></h2></div>
	</section>
	<section class="sellingpoints">
		<div class="sellingpointcontainer"><div class="sellingpoint"><h3>No<br />Fees</h3></div></div>
		<div class="sellingpointcontainer"><div class="sellingpoint"><h3>24h<br />Maintenance</h3></div></div>
		<div class="sellingpointcontainer"><div class="sellingpoint"><h3>Flexible<br />Viewings</h3></div></div>
		<div class="sellingpointcontainer"><div class="sellingpoint"><h3>Flexible<br />Deposit<br>Options</h3></div></div>
	</section>
	<section class="homemap" id="canvas1">
			<iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d75983.66238492323!2d-2.230114!3d53.477584!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1451310597797" allowfullscreen></iframe>
	</section>
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
</main>


<?php include("includes/footer.php"); ?>