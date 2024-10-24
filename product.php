<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <!-- Internal Name: Product Page -->
        <title>Product Page &#8212; N/A Movies </title>
        <!-- Alright so this is the link to our style sheet -->
        
		<link rel="icon" type="image/x-icon" href="images/favicon.png">
		<!-- Favicon Sourced from: https://www.clipartmax.com/middle/m2i8d3A0Z5Z5Z5G6_popcorn-cinema-icon-set-~-icons-~-creative-market-cinema-pop-corn/ -->
        <link href="styles/style.css" rel="stylesheet" > 
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Movie Range">
        <meta name="keywords" content="Movies, Tickets , Avatar, Bullet Train, Elvis, Nope, Spider-Man: No Way Home, DC League of Super-Pets, Ticket to Paradise, Top Gun: Maverick, Orphan: First Kill, COS10026, HTML">
        <meta name="author" content="Group Name: [N/A] ||| MEMBERS: Vi, Ethan, Henry, Lauchie, Nathan">
        
    </head>
   
   
    <body>
		<?php include_once "header.inc";    ?>
		
		<br>
		
        <div class="titlebar">
            <!-- Contains the title and... whatever else we want it to contain -->
            <!-- I think it's worth partitioning things properly -->
        </div>

		<br>	       
		
		<aside id="options">
			<a href="product.php#upgrade_section">
			<h3>View Options/Upgrades</h3>
			<p>Want to bundle a popcorn and drink with your movie session?</p>
			<p>How about upgrading to our premium Gold Class experience?</p>
			</a>
		</aside>
		
		<div class="movie">
			
			<img id="movie2" src="images/avatar.jpg" alt="avatar img" title="Avatar (2009)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00006915/poster.jpg -->
			<a class="trailer" href="trailers.php">View Trailer</a>
			<p class="bio"> 
				On the Alien world of ‘Pandora’ reside the inhabitants known as the ‘Na’vi’, a highly evolved race.
				Due to the poisonous environment of Pandora, humans interact with the beings and landscape through the use of hybrid human/Na’vi beings calling Avatars that are able to freely move around.
			</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>8:00 AM</td>
						<td>8:30 AM</td>
						<td>9:00 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:30 PM</td>
						<td>1:30 PM</td>
						<td>2:30 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:00 PM</td>
						<td>7:00 PM</td>
						<td>8:00 PM</td>
					</tr>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Action, Science Fiction, Fantasy <br>
			Duration: 3 Hours <br>
			Rating: PG 13</p>
		</div>
		
		<br>
		<div class="movie">
			<img id="movie4" src="images/bullet_train.jpg" alt="bullet_train img" title="Bullet Train (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00007579/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer2">View Trailer</a>
			<p class="bio">
				A unlucky assassin after one too many failed jobs has decided to attempt to accomplish his duties in a more peaceful manner.
				However, this wish of Ladybug’s is terribly interrupted as International enemies gather up to take on Ladybug on the world’s fastest train.
			</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>9:50 AM</td>
						<td>10:20 AM</td>
						<td>11:30 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:20 PM</td>
						<td>1:50 PM</td>
						<td>3:30 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:10 PM</td>
						<td>7:30 PM</td>
						<td>9:00 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info"> Genre: Action, Mystery, Thriller <br>
			Duration: 2 Hours 6 Minutes <br>
			Rating: MA 15+</p>
		</div>
		<br>
		
		<aside>
			<p>Want to beat the queue and walk right in the cinema?</p>
			<p>Pre-book your tickets online for a speedy entry next time!</p>
		</aside>
		
		<span id="centre_movies">
		<span id="centre_elvis">
		<div class="movie">
			
			<img id="movie7" src="images/elvis.jpg" alt="elvis img" title="Elvis (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00006729/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer3">View Trailer</a>
			<p class="bio">
				A biography based on the rockstar that blew up in the 50’s and 60’s, Elvis Presley. Narrating his rise to fame, relationships, hardships and of course documenting and rein visioning the music he wrote and performed.
			</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>9:20 AM</td>
						<td>10:00 AM</td>
						<td>11:10 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:30 PM</td>
						<td>1:00 PM</td>
						<td>2:00 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:10 PM</td>
						<td>7:30 PM</td>
						<td>8:40 PM</td>
				</tbody>
			</table>
			
			<br>
			
			<p class="info">Genre: Biography, Musical, Drama <br>
			Duration: 2 Hours 39 Minutes <br>
			Rating: M</p>
		</div>
		</span>
		<br>
		<div class="movie">
			<img id="movie3" src="images/nope.jpg" alt="nope img" title="Nope (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00007096/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer4">View Trailer</a>
			<p class="bio">
				A pair of siblings notice something wonderful and sinister in the sky above.
				Whilst, the owner of the nearby theme park wishes to profit off such phenomenon.
			</p>

			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>8:10 AM</td>
						<td>9:00 AM</td>
						<td>10:30 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:00 PM</td>
						<td>1:30 PM</td>
						<td>3:00</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:00 PM</td>
						<td>7:20 PM</td>
						<td>9:00 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Horror, Thriller <br>
			Duration: 2 Hours 15 Minutes <br>
			Rating: M</p>
			
		</div>
		<br>
		<div class="movie">
			<img id="movie5" src="images/spiderman.jpg" alt="spiderman img" title="Spider-Man: No Way Home (2021)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00008060/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer5">View Trailer</a>					
			<p class="bio">
				As Spiderman’s identity as Peter Parker is revealed, he is no longer to distinguish the two different lifestyles. With this new dilemma, Peter seeks aid from Doctor Strange, to which leads Peter to embark on a journey to discover what it really means to be Spiderman
			</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>9:10 AM</td>
						<td>10:20 AM</td>
						<td>11:00 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:20 PM</td>
						<td>1:50 PM</td>
						<td>4:00 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:20 PM</td>
						<td>7:00 PM</td>
						<td>8:10 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Action, Superhero<br>
			Duration: 2 Hours 28 Minutes<br>
			Rating: M</p>
			
		</div>
		<br>
		<div class="movie">
			<img id="movie6" src="images/superpets.jpg" alt="superpets img" title="DC League of Super-Pets (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00006565/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer6">View Trailer</a>
			<p class="bio">
				Within the crime ridden city of ‘Metropolis’, Krypto the Superdog and Superman are an inseparable duo.
				However, when Superman and the rest of his Justice League are kidnapped, Krypto the Superego must gather a group of animals to embark on a rescue mission
				</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>9:00 AM</td>
						<td>10:30 AM</td>
						<td>11:20 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:30 PM</td>
						<td>1:50 PM</td>
						<td>3:00 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:00 PM</td>
						<td>7:20 PM</td>
						<td>8:10 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Comedy, Children's Film, Animation <br>
			Duration: 1 Hour 45 Minutes<br>
			Rating: PG</p>
			
		</div>
		<br>
		<div class="movie">
			<img id="movie8" src="images/ticket_to_paradise.jpg" alt="ticket_to_paradise img" title="Ticket to Paradise (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00007389/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer7">View Trailer</a>
			<p class="bio"> 
				A divorced couple comes back together to attempt to stop their daughter as they believe she is to make the same mistakes as they did 25 years ago
			</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>8:20 AM</td>
						<td>10:00 AM</td>
						<td>11:40 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:10 PM</td>
						<td>1:30 PM</td>
						<td>3:50 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>5:30 PM</td>
						<td>7:00 PM</td>
						<td>9:00 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Comedy, Romance <br>
			Duration: 1 Hour 44 Minutes <br>
			Rating: M</p>
			
		</div>
		<br>
		<div class="movie">
			<img id="movie9" src="images/top_gun.jpg" alt="top_gun img" title="Top Gun: Maverick (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00003807/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer8">View Trailer</a>
			<p class="bio">
				Training a detachment of graduates for a special assignment, Maverick must confront the ghosts of his past and his deepest fears, culminating in a mission that demands the ultimate sacrifice from those who choose to fly it.
			</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Morning</th>
						<td>9:00 AM</td>
						<td>10:10 AM</td>
						<td>11:40 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>1:00 PM</td>
						<td>2:30 PM</td>
						<td>4:00 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:10 PM</td>
						<td>7:40 PM</td>
						<td>9:00 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Action, Adventure <br>
			Duration: 2 Hours 11 Minutes <br>
			Rating: M</p>
			
		</div>
		<br>
		<div class="movie">
			<img src="images/orphan.jpg" alt="orphan first kill img" title="Orphan: First Kill (2022)" />
			<!-- Image Sourced from: https://www-s3.hoyts.com.au/movies/AU/HO00008083/poster.jpg -->
			<a class="trailer" href="trailers.php#trailer9">View Trailer</a>
			<p class="bio">
				Subsequently after being able to escape the psychiatric facility withholding her, Esther travels to America impersonating a missing daughter of a wealthy family.
				This puts Esther against a mother who will protect her family with all of her will.
				</p>
			<table>
				<thead>
					<tr>
						<th colspan="4">Showtimes</th>
					</tr>
				</thead>
				<tbody id="upgrade_section">
					<tr>
						<th>Morning</th>
						<td>8:50 AM</td>
						<td>10:00 AM</td>
						<td>11:00 AM</td>
					</tr>
					<tr>
						<th>Afternoon</th>
						<td>12:00 PM</td>
						<td>1:00 PM</td>
						<td>3:10 PM</td>
					</tr>
					<tr>
						<th>Night</th>
						<td>6:20 PM</td>
						<td>7:00 PM</td>
						<td>8:10 PM</td>
				</tbody>
			</table>
			
			
			<br>
			
			<p class="info">Genre: Horror, Thriller <br>
			Duration: 2 Hours 3 Minutes <br>
			Rating: MA 15+</p>
			
		</div>
		</span>
		<br>
	
	<section class="upgrades">		
	<h3> Theatre Upgrades </h3>
		<aside class="upgrade_pics">
			<img src="images/cinema2.jpg" alt="cinema image">
			<!-- Image Sourced from: https://unsplash.com/photos/evlkOfkQ5rE -->
		</aside>

		
	<p> Our cinemas and screenings are delivered in 3 options.
	All of which are great! If you are looking for a casual experience the standard is amazing or if you are
	looking for more you can upgrade your experience.
		
        <ol>
             <li><strong>Standard</strong> 
			 <ul>
               <li>Standard Theatre</li>
               <li>Standard Seats</li>
               
            </ul>
         </li>
		 <li><strong>IMAX</strong> 
            <ul>
               <li>Seat selection</li>
               <li>Reclining Seats</li>
               <li>Enhanced Viewing </li>
			   
            </ul>
         </li>
        <li><strong>Gold Class</strong> 
            <ul>
			   <li>Seat selection</li>
               <li>Fully controllable reclining seats</li>
               <li>Meal of choice</li>
			   <li>Enhanced Viewing </li>
            </ul>
			</li>
		</ol>
	</section>
		
	<section class="upgrades">	
		<h3> Food and Drinks </h3>
	<p> At N/A cinemas bring food and drinks with you while you watch
	our Movies. There's a wide range of popular movie snacks and drinks 
	for you to enjoy; </p>
		<aside class="upgrade_pics">
			<img src="images/popcorn3.jpg" alt="popcorn image">
			<!-- Image Sourced from: https://unsplash.com/photos/q8P8YoR6erg -->
		</aside>
        <ul>
             <li><strong>Snacks</strong> 
			 <ul>
               <li>Popcorn
			   <ul>
					<li>Sizes: Large, Regular, Small</li>
					<li>Flavours: Salted Caramel, Salted Butter</li>
					
					</ul>
				</li>
               <li>Icecream
					<ul>
					<li>Ben and Jerry's</li>
					<li>Paddle Pops</li>
					<li>Zooper Doopers</li>
					</ul>
				</li>
			   <li>Candy
					<ul>
					<li>Snakes</li>
					<li>Pods</li>
					<li>M&M</li>
					</ul>
               </li>
            </ul>
         </li>
		 
		 <li><strong>Drinks</strong> 
            <ul>
               <li>Soft drinks
			   <ul>
					<li>Coke</li>
					<li>Sprite</li>
					<li>Fanta</li>
				</ul>
				</li>
				
               <li>Slurpees
               <ul>
					<li>Cherry Apple</li>
					<li>Blue Raspberry</li>
					<li>Blood Orange</li>
				</ul>
				</li>
			  </ul>
            </li>
		</ul>
	</section>
	
	
	<section class="upgrades">	
		<h3> Our Service </h3>
		<aside class="upgrade_pics">
			<img src="images/service2.jpg" alt="service image">
			<!-- Image Sourced from: https://unsplash.com/photos/fMntI8HAAB8 -->
		</aside>
	
	<p>Quality of service is always one of our top priorities for our guests and staff, we want to ensure that you
	feel confortable with our exceptional service.</p>
        <ul>
             <li><strong>Staff</strong> 
			 <ul>
               <li>Our friendly staff will ensure you enjoy your experience at NA cinemas, they
			   are happy to answer and questions you may have or guide you to your cinemas. and Strive to give 
			   you an amazing experience with us.</li>
              
               
            </ul>
         </li>
		 <li><strong>Cleanliness and Safety</strong> 
            <ul>
               <li>Our locations are always kept to tidy and extremely clean conditions, at NA 
			   Cinemas, you will have peace of mind knowing that all our cinemas are cleaned between screeningsa
			   and are professionally cleaned on a regular basis.</li>
			   
			   <li>To keep you safe during the pandemic we have implemented ways to minimise contact.
				<ol>
				<li>Contactless Payments</li>
				<li>Santizing Stations</li>
				<li>Social Distancing where possible</li>
				</ol>
				</li>
            </ul>
         </li>
        <li><strong>Rewards</strong> 
            <ul>
			   <li>Earn reward points through each purchase of any item with us. Simply use our app and 
			   redeem your points to earn prizes such as free movie tickets, discounts and many more.
			   Alternatively you can donate these points to a charity of your choice.</li>
			   
			   <li>Become a member and enjoy discounts, exclusive news on upcoming events and offers.</li>
			   
             
            </ul>
			</li>
		</ul>
		
		</section>
		
		
		<?php include_once "footer.inc";    ?>
		
    </body>
</html>