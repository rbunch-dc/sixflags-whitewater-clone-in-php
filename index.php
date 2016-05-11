<?php


	$promo_array[] = array(
		'title' => 'Online Store',
		'image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_small/public/teaser_sp_combo-ww.jpg?itok=hoxloclQ',
		'text_header' => 'Discount Season Passes',
		'text_body' => 'Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.',
		'lower_image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/chickenstrips_90x68_0.png?itok=VfE3UiKg',
		'lower_header' => 'Online Meal Deals',
		'lower_text' => 'Save time and money by printing meal deals online.',
		'lower_image2' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/Cabanas_90x68.jpg?itok=X4crIjXa',
		'lower_header2' => 'Cabanas',
		'lower_text2' => 'Cool off and relax in your own private hideaway.'
	);


	$promo_array[] = array(
		'title' => 'Rides',
		'image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_small/public/teaser_sp_combo-ww.jpg?itok=hoxloclQ',
		'text_header' => 'Wahoo Racer',
		'text_body' => 'Coming May 21, race head-first, stomach-down on a six-lane course to the finish line.',
		'lower_image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/chickenstrips_90x68_0.png?itok=VfE3UiKg',
		'lower_header' => 'Dive Bomber',
		'lower_text' => 'Our tallest water slide -- Dive Bomber!',
		'lower_image2' => 'https://www.sixflags.com/sites/default/files/styles/park_page_thumb/public/Cabanas_90x68.jpg?itok=X4crIjXa',
		'lower_header2' => 'Tornado',
		'lower_text2' => 'There’s no calm in the eye of this storm.'
		);

	$promo_array[] = array(
		'title' => 'Groups',
		'image' => 'https://www.sixflags.com/sites/default/files/styles/park_page_small/public/teaser_sp_combo-ww.jpg?itok=hoxloclQ',
		'text_header' => 'Bring the Whole Group',
		'text_body' => 'Great rates for groups. Once inside, relax with a catered meal in your own picnic area.',
		'lower_image' => 'Lazy River',
		'lower_header' => 'Youth Group Events',
		'lower_text' => 'Camps, clubs, scouts and cubs — they all love a day at the park.',
		'lower_image2' => 'Group Birthday Party',
		'lower_header2' => 'Birthday Parties',
		'lower_text2' => 'Six FlagsWhite Water has birthday packages for parties of 8 or more.'
		);



	include 'includes/db_connect.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</head>
<body>

	<div id="header">
		<div id="header-inner">
			<div id="header-left">
				<div id="logo">
					<img src="images/default-sf-logo.png">
				</div>
			</div>	
			<div id="header-right">
				<div id="top-links">
					<li class="link-item"><a href="#">Park</a></li>
					<li class="link-item"><a href="#">HomeNational</a></li>
					<li class="link-item"><a href="#">HomePark</a></li>
					<li class="link-item"><a href="#">MapPass Holder Login</a></li>
					<li class="link-item orange"><a href="#"><img src="images/icon-cart.png"> My Cart [0]</a></li>
					<li class="link-item orange"><a href="#">Enter Promo Code</a></li>
				</div>
				<div id="park-title">Six Flags White Water</div>
				<div id="park-city">Atlanta</div>
			</div>
		</div>
	</div>

	<div id="nav-bar">
		<div id="nav-inner">
			<li class="menu-item"><a href="#">THINGS TO DO</a></li>
			<li class="menu-item"><a href="#">PLAN VISIT</a></li>
			<li class="menu-item"><a href="#">WHAT'S NEW</a></li>
			<li class="menu-item"><a href="#">EVENTS</a></li>
			<li class="menu-item"><a href="#">PARK HOURS</a></li>
			<li class="menu-item"><a href="#">GROUPS</a></li>
			<li class="menu-item green"><a href="#">PASSES & MEMBERSHIPS</a></li>
			<li class="menu-item green"><a href="#">TICKETS</a></li>
		</div>
	</div>

	<div id="main-content">
		<div id="slideshow">
			<img src="images/hp_BlackRiverFalls_ATLWP.jpg">
		</div>
		<div id="swoosh">
			<!-- Empty -->
		</div>

		<div id="promotions">
			<div class="promo">
				<div class="promo-title">
					<?php print $promo_array[2]['title']; ?>
				</div>
				<div class="promo-image">
					<img src="images/teaser_sp_combo-ww.jpg">
				</div>
				<div class="promo-text-wrapper">
					<div class="promo-text-title">
						Discount Season Passes
					</div>
					<div class="promo-text">
						Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.				
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/chickenstrips_90x68_0.png">
					</div>
					<div class="promo-small-text-title">
						Online Meal Deals
					</div>
					<div class="promo-small-text">
						Save time and money by printing meal deals online.
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/burger-90x68.jpg">
					</div>
					<div class="promo-small-text-title">
						Dining Passes
					</div>
					<div class="promo-small-text">
						Enjoy lunch, dinner and a snack on each visit.
					</div>
				</div>
			</div>

			<div class="promo">
				<div class="promo-title">
					Online Store
				</div>
				<div class="promo-image">
					<img src="images/teaser_sp_combo-ww.jpg">
				</div>
				<div class="promo-text-wrapper">
					<div class="promo-text-title">
						Discount Season Passes
					</div>
					<div class="promo-text">
						Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.				
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/chickenstrips_90x68_0.png">
					</div>
					<div class="promo-small-text-title">
						Online Meal Deals
					</div>
					<div class="promo-small-text">
						Save time and money by printing meal deals online.
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/burger-90x68.jpg">
					</div>
					<div class="promo-small-text-title">
						Dining Passes
					</div>
					<div class="promo-small-text">
						Enjoy lunch, dinner and a snack on each visit.
					</div>
				</div>
			</div>

			<div class="promo">
				<div class="promo-title">
					Online Store
				</div>
				<div class="promo-image">
					<img src="images/teaser_sp_combo-ww.jpg">
				</div>
				<div class="promo-text-wrapper">
					<div class="promo-text-title">
						Discount Season Passes
					</div>
					<div class="promo-text">
						Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.				
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/chickenstrips_90x68_0.png">
					</div>
					<div class="promo-small-text-title">
						Online Meal Deals
					</div>
					<div class="promo-small-text">
						Save time and money by printing meal deals online.
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/burger-90x68.jpg">
					</div>
					<div class="promo-small-text-title">
						Dining Passes
					</div>
					<div class="promo-small-text">
						Enjoy lunch, dinner and a snack on each visit.
					</div>
				</div>
			</div>

			<div class="promo">
				<div class="promo-title">
					Online Store
				</div>
				<div class="promo-image">
					<img src="images/teaser_sp_combo-ww.jpg">
				</div>
				<div class="promo-text-wrapper">
					<div class="promo-text-title">
						Discount Season Passes
					</div>
					<div class="promo-text">
						Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.				
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/chickenstrips_90x68_0.png">
					</div>
					<div class="promo-small-text-title">
						Online Meal Deals
					</div>
					<div class="promo-small-text">
						Save time and money by printing meal deals online.
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/burger-90x68.jpg">
					</div>
					<div class="promo-small-text-title">
						Dining Passes
					</div>
					<div class="promo-small-text">
						Enjoy lunch, dinner and a snack on each visit.
					</div>
				</div>
			</div>


			<div class="promo">
				<div class="promo-title">
					Online Store
				</div>
				<div class="promo-image">
					<img src="images/teaser_sp_combo-ww.jpg">
				</div>
				<div class="promo-text-wrapper">
					<div class="promo-text-title">
						Discount Season Passes
					</div>
					<div class="promo-text">
						Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.				
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/chickenstrips_90x68_0.png">
					</div>
					<div class="promo-small-text-title">
						Online Meal Deals
					</div>
					<div class="promo-small-text">
						Save time and money by printing meal deals online.
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/burger-90x68.jpg">
					</div>
					<div class="promo-small-text-title">
						Dining Passes
					</div>
					<div class="promo-small-text">
						Enjoy lunch, dinner and a snack on each visit.
					</div>
				</div>
			</div>

			<div class="promo">
				<div class="promo-title">
					Online Store
				</div>
				<div class="promo-image">
					<img src="images/teaser_sp_combo-ww.jpg">
				</div>
				<div class="promo-text-wrapper">
					<div class="promo-text-title">
						Discount Season Passes
					</div>
					<div class="promo-text">
						Buy Season Passes now and save! Or get Combo Passes for unlimited visits to Six Flags Over Georgia.				
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/chickenstrips_90x68_0.png">
					</div>
					<div class="promo-small-text-title">
						Online Meal Deals
					</div>
					<div class="promo-small-text">
						Save time and money by printing meal deals online.
					</div>
				</div>
				<div class="promo-small">
					<div class="promo-small-image">
						<img src="images/burger-90x68.jpg">
					</div>
					<div class="promo-small-text-title">
						Dining Passes
					</div>
					<div class="promo-small-text">
						Enjoy lunch, dinner and a snack on each visit.
					</div>
				</div>
			</div>			
		</div>
	</div>

	<div id="footer">
		<div id="footer-inner">
			<ul>
				<li>Things to Do</li>
				<li>Rides</li>
				<li>Height Requirements</li>
				<li>Events</li>
				<li>Food & Dining</li>
				<li>Shopping</li>
			</ul>
			<ul>
				<li>Tickets & Packages</li>
				<li>One-Day Tickets</li>
				<li>Season Passes</li>
				<li>Group Sales</li>
				<li>THE FLASH Pass</li>
				<li>Special Offers</li>
			</ul>
			<ul>
				<li>Plan Your Visit</li>
				<li>Park Hours</li>
				<li>Directions</li>
				<li>Park Map</li>
				<li>Guests with Disabilities</li>
				<li>Lodging</li>
			</ul>
			<ul>
				<li>Interact with Us</li>
				<li>Email Signup</li>
				<li>Contact Us</li>
				<li>Lost and Found</li>
				<li>Member Support</li>
				<li>Pass Holder Login</li>
			</ul>
			<ul>
				<li>About Us</li>
				<li>Newsroom</li>
				<li>Community</li>
				<li>Corporate Partners</li>
				<li>National Site</li>
				<li>Investor Site</li>
			</ul>
		</div>
	</div>




</body>
</html>