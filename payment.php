<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <!-- Internal Name: Enquiry Page -->
        <title>Order &#8212; N/A Movies </title>
        <!-- Alright so this is the link to our style sheet -->
		
		<link rel="icon" type="image/x-icon" href="images/favicon.png">
		<!-- Favicon Sourced from: https://www.clipartmax.com/middle/m2i8d3A0Z5Z5Z5G6_popcorn-cinema-icon-set-~-icons-~-creative-market-cinema-pop-corn/ -->
        <link href="styles/style.css" rel="stylesheet" > 
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Enquiry Form">
        <meta name="keywords" content="Movies, Tickets , Avatar, Bullet Train, Elvis, Nope, Spider-Man: No Way Home, DC League of Super-Pets, Ticket to Paradise, Top Gun: Maverick, Orphan: First Kill, COS10026, HTML">
        <meta name="author" content="Group Name: [N/A] ||| MEMBERS: Vi, Ethan, Henry, Lauchie, Nathan">
        
    </head>
        
        
    <body>
		<?php include_once "header.inc";    ?>
		
        <div class="titlebar">
            <!-- Contains the title and... whatever else we want it to contain -->
            <!-- I think it's worth partitioning things properly -->
        </div>

		<div id="mail_pic">
			<img src="images/mail2.png" alt="mail image">
			<!-- Image Sourced from: https://commons.wikimedia.org/wiki/File:Mail-closed.svg -->
		</div>
        <div class="enquire">
            <form method="post" action="https://mercury.swin.edu.au/cos10026/s103992100/assign2/process_order.php" novalidate>
		
				<!-- Name section -->
				<fieldset class="fieldsetcenter">
					<legend>Personal Details</legend>
					<p>
						<label for="fname">First Name:</label>
						<input type="text" pattern="[a-zA-Z]{1,25}" name="FirstName" id="fname" placeholder="First Name" title="1-25 alphabetical characters only" required>
					</p>
					<p>
						<label for="Lname">Last Name:</label>
						<input type="text" pattern="[a-zA-Z]{1,25}" name="LastName" id="Lname" placeholder="Last Name" title="1-25 alphabetical characters only" required>
					</p>
					<p>
						<label for="email">Email Address:</label>
						<input type="email" name="Email" id="email" placeholder="name@address.com" required>
					</p>
					<p>
						<label for="phone">Phone Number:</label>
						<input type="text" name="Phone" id="phone" pattern="[0-9]{8,10}" placeholder="04-XXXX-XXXX" required title="Maximum of 10 digits permitted">
					</p>
				</fieldset>
				
								
				<!-- Ordering Section -->
				<fieldset class="fieldsetcenter">
					<legend>Movie Order Information</legend>
					
					<p>
						<label for="movie_issue">Movie:</label>
						<select name="Movie" id="movie_issue" required>
							<option value="">Please Select:</option>
							<option value="Avatar">Avatar</option>
							<option value="Bullet Train">Bullet Train</option>
							<option value="Elvis">Elvis</option>
							<option value="Nope">Nope</option>
							<option value="Spider-Man: No Way Home">Spider-Man: No Way Home</option>
							<option value="DC League of Super-Pets">DC League of Super-Pets</option>
							<option value="Ticket to Paradise">Ticket to Paradise</option>
							<option value="Top Gun: Maverick">Top Gun: Maverick</option>
							<option value="Orphan: First Kill">Orphan: First Kill</option>
						</select>
					</p>
					
					<p>
						<label for="Ticket_quantity">Tickets ($18/Ticket):</label>
						<input type="text" name="Ticket_quantity" id="Ticket_quantity" pattern="[0-9]{1,3}" placeholder="Enter Quantity" required title="Maximum of 999">
					</p>
					
					
					<h3>Extra Options</h3>
					
					<p>
					<label for="Popcorn">Popcorn ($8 Each)</label>
					<input type="text" id="Popcorn" name="Popcorn" placeholder="Enter Quantity" />
					<br><br>
					<label for="Drink">Drink ($5 Each)</label>
					<input type="text" id="Drink" name="Drink" placeholder="Enter Quantity" />
					<br><br>
					<label for="Choc_top">Choc Top ($7 Each)</label>
					<input type="text" id="Choc_top" name="Choc_top" placeholder="Enter Quantity" />
					</p>
					
					
				</fieldset>
				
				
				<!-- Payment Section -->
				<fieldset class="fieldsetcenter">
					<legend>Payment Information</legend>
					
					<p>
						<label for="Card_type">Card Type:</label>
						<select name="Card_type" id="Card_type" required>
							<option value="">Please Select:</option>
							<option value="Visa">Visa</option>
							<option value="Mastercard">Mastercard</option>
							<option value="American Express">American Express</option>
						</select>
					</p>
					
					<label for="Card_name">Name On Credit Card:</label>
					<input type="text" id="Card_name" name="Card_name" placeholder="Enter Name on Card" />
					<br><br>
					<label for="Card_number">Credit Card Number:</label>
					<input type="text" id="Card_number" name="Card_number" placeholder="Enter Credit Card Number" />
					<br><br>
					<label for="Card_expiry">Credit Card Expiry Date:</label>
					<input type="text" id="Card_expiry" name="Card_expiry" placeholder="mm-yy" />
					<br><br>
					<label for="Card_cvv">Credit Card Verification Value (CVV):</label>
					<input type="text" id="Card_cvv" name="Card_cvv" placeholder="Enter 3 digit CVV" />
					
					
					
				</fieldset>
				
					
				<!-- Comment Field -->
				<div id="submitsection">
					<input type= "submit" value="Checkout" name="submit"/>
					<input type= "reset" value="Reset Order"/>
				</div>
			</form>
			<br><br>
        </div>
		
		<?php include_once "footer.inc";    ?>
		
    </body>
</html>