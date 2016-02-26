<?php
$title = "Our Properties";
$desc = "Student Housing / Properties";
include("includes/header.php"); ?>

<main role="main" id="skipnav">
	<section class="content">
		<section class="single-property-information">
		<div class="pptitle">
				<div class="single-title">
				<h1>4 Fairbank Avenue</h1>
				</div>
				<div class="single-price">
					<h2>£78 PPPW</h2>
				</div>
				<div class="single-available">
					<h3>Available From: 1st July 2016</h3>
				</div>	
				<div class="propertyfeatures">
					<div class="propertyfeature bed">
					<p>8 Bedrooms</p>
					</div>
					<div class="propertyfeature toilet">
					<p>2 Bathrooms</p>
					</div>
					<div class="propertyfeature shower">
					<p>2 Showers</p>
					</div>
					<div class="propertyfeature table">
					<p>Large Dining Room</p>
					</div>
					<div class="propertyfeature washing">
					<p>Washing Machine & Dryer</p>
					</div>
					<div class="propertyfeature tv">
					<p>42" 1080p TV</p>
					</div>
					<div class="propertyfeature parking">
					<p>On-road Parking</p>
					</div>
					<div class="propertyfeature alarm">
					<p>Fire/Security Alarm</p>
					</div>
				</div>
			</div>
		</section>
		<section class="propertygallery">
			<div id="gallery">
				<p>
				<div class="gallerynojs">
				<div><img src="gallery/large/large1.jpg" alt="Front door - 4 Fairbank Avenue" /></div>
				<div><img src="gallery/large/large2.jpg" alt="Lounge - 4 Fairbank Avenue" /></div>
				<div><img src="gallery/large/large3.jpg" alt="Kitchen - 4 Fairbank Avenue" /></div>
				<div><img src="gallery/large/large4.jpg" alt="Bathroom - 4 Fairbank Avenue" /></div>
				<div><img src="gallery/large/large5.jpg" alt="Towel rack & mirror - 4 Fairbank Avenue" /></div>
				<div><img src="gallery/large/large6.jpg" alt="A chrome tap - 4 Fairbank Avenue" /></div>
				</div>
				</p>
			</div>
		</section>
		<div style="width:100%"><hr /></div>
		<section class="map-form">
			<section id="contactform" class="single-property-contactform">
				<h2>Get in Contact</h2>
				<form class="contactform" name="contact" method="post" action="cf-single.php" onSubmit="alert('Message Successfully Sent!')">
					<label for="Name">Name <span>*</span></label>
					<input type="text" name="Name" id="Name" size="30" required> 
					<label for="Email">Email <span>*</span></label>
					<input type="text" name="Email" id="Email" size="30" placeholder="" required>
					<label for="Telephone">Telephone <span>*</span></label>
					<input type="text" name="Telephone" id="Telephone" size="30" placeholder="" required> 
					<label for="Subject">Subject <span>*</span></label>
					<input type="text" name="Subject" id="Subject" size="30" Value="I'd like to rent 4 Fairbank Avenue" required> 
					<label for="Message">Message <span>*</span></label>
					<textarea name="Message" id="Message" placeholder="" required></textarea>
					<input id="submit" type="submit" name="submit" value="Send" />  
				</form>
			</section>
			<section class="single-map" id="canvas1">
			<h2>Location</h2>
			<iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.607021359128!2d-2.236737284157342!3d53.45761078000243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb18aec6f0be5%3A0x4964eef8e55921b7!2s4+Fairbank+Ave%2C+Manchester+M14+4PU!5e0!3m2!1sen!2suk!4v1456091795692" allowfullscreen></iframe>
			</section>
		</section>

	</section>
</main>
<script type="text/javascript" src="js/responsivethumbnailgallery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>

<?php include("includes/footer.php"); ?>