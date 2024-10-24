<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <!-- Internal Name: Receipt Page -->
        <title>Receipt &#8212; N/A Movies </title>
        <!-- Alright so this is the link to our style sheet -->
		
		<link rel="icon" type="image/x-icon" href="images/favicon.png">
		<!-- Favicon Sourced from: https://www.clipartmax.com/middle/m2i8d3A0Z5Z5Z5G6_popcorn-cinema-icon-set-~-icons-~-creative-market-cinema-pop-corn/ -->
        <link href="styles/style.css" rel="stylesheet" > 
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Receipt">
        <meta name="keywords" content="Movies, Tickets , Avatar, Bullet Train, Elvis, Nope, Spider-Man: No Way Home, DC League of Super-Pets, Ticket to Paradise, Top Gun: Maverick, Orphan: First Kill, COS10026, HTML">
        <meta name="author" content="Group Name: [N/A] ||| MEMBERS: Vi, Ethan, Henry, Lauchie, Nathan">
        
    </head>
	
	
	<body>
		<?php include_once "header.inc";    ?>
		
		<div id="receipt_center">
		<h1>Receipt</h1>
		<h3>Thank you for your order!</h3>
		</div>
		
		<div id="table_spacing">
		<?php
		session_start();
		
		if (!isset($_SESSION["FirstName"])) {
			header("location:payment.php");
			}
			
		$FirstName=($_SESSION['FirstName']);
		$LastName=($_SESSION['LastName']);
		
		require_once ("settings.php");
	
		$conn = mysqli_connect($host,$user,$pwd,$sql_db);
		
		if (!$conn) {
			echo "<p>Database connection failure</p>";
		} else {
			
			$sql_table = "orders";
			
			$query = "SELECT * from $sql_table WHERE firstname LIKE '$FirstName%' AND lastname LIKE '$LastName%'";
			
			$result = mysqli_query($conn, $query);
			
			if (!$result) {
				echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
			} else {
				echo "<table border=\"1\">\n";
				echo "<tr>\n "
					."<th scope=\"col\">Order ID</th>\n "
					."<th scope=\"col\">Order Cost</th>\n "
					."<th scope=\"col\">Order Time</th>\n "
					."<th scope=\"col\">Order Status</th>\n "
					."<th scope=\"col\">First Name</th>\n "
					."<th scope=\"col\">Last Name</th>\n "
					."<th scope=\"col\">Email</th>\n "
					."<th scope=\"col\">Phone</th>\n "
					."<th scope=\"col\">Movie Choice</th>\n "
					."<th scope=\"col\">Ticket Quantity</th>\n "
					."<th scope=\"col\">Card Type</th>\n "
					."<th scope=\"col\">Cardholder Name</th>\n "
					."<th scope=\"col\">Card Number</th>\n "
					."<th scope=\"col\">Card Expiry</th>\n "
					."<th scope=\"col\">Card CVV</th>\n "
					."</tr>\n ";
					
				
				while($row = mysqli_fetch_assoc($result)){
					echo "<tr>\n ";
					echo "<td>",$row["order_id"],"</td>\n ";
					echo "<td>$",$row["order_cost"],"</td>\n ";
					echo "<td>",$row["order_time"],"</td>\n ";
					echo "<td>",$row["order_status"],"</td>\n ";
					echo "<td>",$row["firstname"],"</td>\n ";
					echo "<td>",$row["lastname"],"</td>\n ";
					echo "<td>",$row["email"],"</td>\n ";
					echo "<td>",$row["phone"],"</td>\n ";
					echo "<td>",$row["movie"],"</td>\n ";
					echo "<td>",$row["ticket_quantity"],"</td>\n ";
					echo "<td>",$row["card_type"],"</td>\n ";
					echo "<td>",$row["card_name"],"</td>\n ";
					echo "<td>",$row["card_number"],"</td>\n ";
					echo "<td>",$row["card_expiry"],"</td>\n ";
					echo "<td>",$row["card_cvv"],"</td>\n ";
					echo "</tr>\n ";
				}
				echo "</table>\n ";

			}
		
		
			if (isset($_POST["end_session"])) {
				$_SESSION = array();
				session_destroy();
				mysqli_free_result($result);
				mysqli_close($conn);
				header("location:payment.php");
			}
			
		}
			
		
		
		
		
		?>
		</div>
		<br><br><br>
		
		<form action="receipt.php" method="POST">
			<div id="receipt_submit_2">
			<input type="submit" name="end_session" value="End Session" />
			</div>
		</form>
	
	
	
	
	
	
	
	
	
		<div id="footerbottom">
		<?php include_once "footer.inc";    ?>
		</div>
	 </body>
</html>