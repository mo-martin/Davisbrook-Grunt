<?php
$title = "Our Properties";
$desc = "Student Housing / Properties";
include("includes/header.php"); ?>

<section class="secondarynav">
	<ul class="secondary-nav-links" role="menubar">
		<li role="menuitem"><a href="3bed.php">3 Bedrooms</a></li>
		<li role="menuitem"><a href="4bed.php">4 Bedrooms</a></li>
		<li role="menuitem"><a href="5bed.php">5 Bedrooms</a></li>
		<li role="menuitem"><a href="6bed.php">6 Bedrooms</a></li>
		<li role="menuitem"><a href="7bed.php">7 Bedrooms</a></li>
		<li role="menuitem"><a href="8bed.php">8 Bedrooms</a></li>
	</ul>
</section>

<main role="main" id="skipnav">
	<section class="content">
		<section class="imageheader" id="propertiesheader">
		<h1>Properties</h1>
		</section>
		<section class="propertycontainer">
			<div class="property property1">
				<div class="propertyinfo">
					<div class="propertytitle"><h2><a href="property.php">4 Fairbank Avenue</a></h2></div>
					<div class="propertyprice"><h2>£78 PPPW</h2></div>
					<div class="propertydescription"><p>Recently renovated <strong>8 Bedroom house</strong> with up to date furnishings, a large lounge (With 42" LCD TV) and kitchen, 5 large bedrooms, 3 medium bedrooms.</p>
					<div class="propertyreadmore"><a href="property.php">More Info</a></div></div>
				</div>
				<div class="mainpropertyimage" id="mainpropertyimage1"></div>
				<div class="propertythumbs">
				<img src="images/house1/small/biglounge.jpg" alt="A picture of a large lounge with 3 sofas" />
				<img src="images/house1/small/kitchen.jpg" alt="A picture of a Kitchen with a chrome oven" />
				<img src="images/house1/small/bathroom.jpg" alt="A picture of a bathroom" />
				<img src="images/house1/small/towel.jpg" alt="A picture of a towel rack" />
				</div>
			</div>
		</section>
		<section class="propertycontainer">
			<div class="property property2">
				<div class="propertyinfo">
					<div class="propertytitle"><h2>Property 2</h2></div>
					<div class="propertyprice"><h2>Price</h2></div>
					<div class="propertydescription"><p>Information of property</p>
					<div class="propertyreadmore"><a href="property.php">More Info</a></div></div>
				</div>
				<div class="mainpropertyimage"></div>
				<div class="propertythumbs">
				<!--<img src="" alt="" />
				<img src="" alt="" />
				<img src="" alt="" />
				<img src="" alt="" />-->
				</div>
			</div>
		</section>
		
	</section>
</main>


<?php include("includes/footer.php"); ?>