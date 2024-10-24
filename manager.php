<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <!-- Internal Name: Manager Page -->
        <title>Management &#8212; N/A Movies </title>
        <!-- Alright so this is the link to our style sheet -->
		
		<link rel="icon" type="image/x-icon" href="images/favicon.png">
		<!-- Favicon Sourced from: https://www.clipartmax.com/middle/m2i8d3A0Z5Z5Z5G6_popcorn-cinema-icon-set-~-icons-~-creative-market-cinema-pop-corn/ -->
        <link href="styles/style.css" rel="stylesheet"> 
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Manager">
        <meta name="keywords" content="Movies, Tickets , Avatar, Bullet Train, Elvis, Nope, Spider-Man: No Way Home, DC League of Super-Pets, Ticket to Paradise, Top Gun: Maverick, Orphan: First Kill, COS10026, HTML">
        <meta name="author" content="Group Name: [N/A] ||| MEMBERS: Vi, Ethan, Henry, Lauchie, Nathan">
        
    </head>
	
	<body>
		<?php include_once "header.inc";    ?>
		
		
		<div id="container">

		<div>
		<form action="manager.php" method="POST" novalidate id="receipt_submit">
			<input type="submit" name="Display_all" value="Display All" />
		</form>
		</div>
		
		<div>
		
		<form action="manager.php" method="POST" id="receipt_submit" novalidate>
		<label for="Sort_by_cost">Sort by: </label>
					<select name="Sort_by_cost" id="Sort_by_cost" required>
						<option value="">Please Select:</option>
						<option value="Ascending">Ascending</option>
						<option value="Descending">Descending</option>
					</select>
					<br>
					<input type="submit" name="Search_Button" value="Display All By Cost"/>	
		</form>
		</div>
		
		<div>		
		<form action="manager.php" method="POST" id="receipt_submit" novalidate>
			<input type="submit" name="Display_pending" value="Display Pending Orders" />
		</form>
		</div>
		
		<div>
		<form action="manager.php" method="POST" id="receipt_submit" novalidate>
			<label for="search_name">Order Name: </label>
			<input type="text" name="Search_name" id="search_name" placeholder="Customer Name"/>
			<br>
			<input type="submit" name="Search_Button" value="Search for Customer"/>	
		</form>
		</div>
		
		<div>
		<form action="manager.php" method="POST" id="receipt_submit" novalidate>
					<label for="Display_movie">Product: </label>
					<select name="Display_movie" id="Display_movie" required>
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
					<br>
					 <input type="submit" name="Search_Button" value="Search by Movie"/>

		</form>
		</div>
		</div>
		
		<div id="table_spacing">
		<?php
			if (isset($_POST["delete_record"])) {
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
					
					session_start();
					
					$Order_edit = $_SESSION['Order_edit'];
					
					$sql_table = "orders";
					
					$query = "SELECT * from $sql_table WHERE order_id=$Order_edit";
						
					$result = mysqli_query($conn, $query);
					
					$row = mysqli_fetch_assoc($result);
					
					$delete_check = $row["order_status"];
								
					if ($delete_check == 'PENDING'){
						
						$query = "DELETE FROM $sql_table WHERE order_id=$Order_edit AND order_status='PENDING' ";
						
						$result = mysqli_query($conn, $query);
							
						if ($result) {
							echo "<h1>Record was deleted</h1>";
							
							$_SESSION = array();
							session_destroy();
							mysqli_close($conn);
							
							echo "<form action='manager.php' method='POST' novalidate>
									<div id='receipt_submit'>
										<input type='submit' name='exit_edit' value='Exit' />
									</div>
								</form>";
						}
						} else {
							echo "<h1>Only pending orders can be deleted</h1>";
							
							echo "<form action='manager.php' method='POST' novalidate>
									<div id='receipt_submit'>
										<input type='submit' name='exit_edit' value='Exit' />
									</div>
								</form>";
							
						}
					}
					
				}
				
			
			
			
		
		
			if (isset($_POST["update_select"])) {
				
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
					
					session_start();
					
					$Order_edit = $_SESSION['Order_edit'];
				
					$Update_select = ($_POST["update_select"]);
					
					if ($Update_select != ""){
					
						$sql_table = "orders";
							
						$query = "UPDATE $sql_table SET order_status='$Update_select' WHERE order_id=$Order_edit  ";
						
						$result = mysqli_query($conn, $query);
						
						if (!$result) {
							echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
						} else {
							$query = "SELECT * from $sql_table WHERE order_id=$Order_edit ";
						
							$result = mysqli_query($conn, $query);
							
							echo "<h1>Showing Updated Record for Order ID: " . $Order_edit . "</h1><br>";
							echo "<table border=\"1\">\n";
							echo "<tr>\n "
								."<th scope=\"col\">Order ID</th>\n "
								."<th scope=\"col\">Order Cost</th>\n "
								."<th scope=\"col\">Order Time</th>\n "
								."<th scope=\"col\">Order Status</th>\n "
								."<th scope=\"col\">First Name</th>\n "
								."<th scope=\"col\">Last Name</th>\n "
								."<th scope=\"col\">Movie Choice</th>\n "
								."<th scope=\"col\">Ticket Quantity</th>\n "
								."</tr>\n ";
								
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr>\n ";
								echo "<td>",$row["order_id"],"</td>\n ";
								echo "<td>$",$row["order_cost"],"</td>\n ";
								echo "<td>",$row["order_time"],"</td>\n ";
								echo "<td>",$row["order_status"],"</td>\n ";
								echo "<td>",$row["firstname"],"</td>\n ";
								echo "<td>",$row["lastname"],"</td>\n ";
								echo "<td>",$row["movie"],"</td>\n ";
								echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
								echo "</tr>\n ";
							}
							
							$_SESSION = array();
							session_destroy();
							mysqli_free_result($result);
							mysqli_close($conn);
							
							echo "<form action='manager.php' method='POST' novalidate>
									<div id='receipt_submit'>
										<input type='submit' name='exit_edit' value='Exit' />
									</div>
								</form>";
						}
					} else {
						echo "<h1>Please select an update status first</h1>";
					}
				
				
				
			}
			}
		
		
			if (isset($_GET["order_edit"])) {
				
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
					
					session_start();
				
					$Order_edit = ($_GET["order_edit"]);
					
					$_SESSION['Order_edit']=$Order_edit;
					
					$sql_table = "orders";
						
					$query = "SELECT * from $sql_table WHERE order_id=$Order_edit  ";
					
					$result = mysqli_query($conn, $query);
					
					echo "<h1>You are editing Order ID: " . $Order_edit . "</h1><br>";
					echo "<table border=\"1\">\n";
					echo "<tr>\n "
						."<th scope=\"col\">Order ID</th>\n "
						."<th scope=\"col\">Order Cost</th>\n "
						."<th scope=\"col\">Order Time</th>\n "
						."<th scope=\"col\">Order Status</th>\n "
						."<th scope=\"col\">First Name</th>\n "
						."<th scope=\"col\">Last Name</th>\n "
						."<th scope=\"col\">Movie Choice</th>\n "
						."<th scope=\"col\">Ticket Quantity</th>\n "
						."</tr>\n ";
						
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>\n ";
						echo "<td>",$row["order_id"],"</td>\n ";
						echo "<td>$",$row["order_cost"],"</td>\n ";
						echo "<td>",$row["order_time"],"</td>\n ";
						echo "<td>",$row["order_status"],"</td>\n ";
						echo "<td>",$row["firstname"],"</td>\n ";
						echo "<td>",$row["lastname"],"</td>\n ";
						echo "<td>",$row["movie"],"</td>\n ";
						echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
						echo "</tr>\n ";
					}
					
					echo "<form action='manager.php' method='POST' novalidate>
							<div id='receipt_submit'>
							<input type='submit' name='exit_edit' value='Go Back' />
							</div>
						</form>";
						
					echo "<form action='manager.php' method='POST' novalidate> 
							<select name='update_select' id='Sort_by_cost' required>
								<option value=''>Please Select:</option>
								<option value='PENDING'>Pending</option>
								<option value='FULFILLED'>Fulfilled</option>
								<option value='PAID'>Paid</option>
								<option value='ARCHIVED'>Archived</option>
							</select>
							<div id='receipt_submit'>
							<input type='submit' name='update_submit' value='Update Record' />
							</div>
						</form>";
						
					echo "<form action='manager.php' method='POST' novalidate>
							<div id='receipt_submit'>
							<input type='submit' name='delete_record' value='Delete Record' />
							</div>
						</form>";
			}
			}
			
			function sanitise_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
			
		
			if (isset($_POST["Display_all"])) {
		
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
				
					$sql_table = "orders";
					
					$query = "SELECT * from $sql_table ";
					
					$result = mysqli_query($conn, $query);
					
					if (mysqli_num_rows($result) == 0) {
						echo "<h1>No Records Found</h1>";
					} else {
						echo "<h1>Displaying All Orders</h1><br>";
						echo "<table border=\"1\">\n";
						echo "<tr>\n "
							."<th scope=\"col\">Order ID</th>\n "
							."<th scope=\"col\">Order Cost</th>\n "
							."<th scope=\"col\">Order Time</th>\n "
							."<th scope=\"col\">Order Status</th>\n "
							."<th scope=\"col\">First Name</th>\n "
							."<th scope=\"col\">Last Name</th>\n "
							."<th scope=\"col\">Movie Choice</th>\n "
							."<th scope=\"col\">Ticket Quantity</th>\n "
							."</tr>\n ";
							
						
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>\n ";
							echo "<td>",$row["order_id"],"</td>\n ";
							echo "<td>$",$row["order_cost"],"</td>\n ";
							echo "<td>",$row["order_time"],"</td>\n ";
							echo "<td>",$row["order_status"],"</td>\n ";
							echo "<td>",$row["firstname"],"</td>\n ";
							echo "<td>",$row["lastname"],"</td>\n ";
							echo "<td>",$row["movie"],"</td>\n ";
							echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
							echo "<td> <a href='manager.php?order_edit=$row[order_id]'>Edit</a> </td>\n ";
							echo "</tr>\n ";
						}
						echo "</table>\n ";
						
						unset($_POST["Display_all"]);
						mysqli_free_result($result);
						mysqli_close($conn);

				}
				}
			}
			
			if (isset($_POST["Sort_by_cost"])) {
				if (($_POST["Sort_by_cost"]) != "") {
					$Sort_by_cost = sanitise_input($_POST["Sort_by_cost"]);
					
					if ($Sort_by_cost == 'Ascending'){
			
						require_once ("settings.php");
						
						$conn = mysqli_connect($host,$user,$pwd,$sql_db);
					
						if (!$conn) {
							echo "<p>Database connection failure</p>";
						} else {
						
							$sql_table = "orders";
							
							$query = "SELECT * from $sql_table ORDER BY order_cost ASC";
							
							$result = mysqli_query($conn, $query);
							
							if (mysqli_num_rows($result) == 0) {
								echo "<h1>No Records Found</h1>";
							} else {
								echo "<h1>Displaying All Orders By Ascending Cost</h1><br>";
								echo "<table border=\"1\">\n";
								echo "<tr>\n "
									."<th scope=\"col\">Order ID</th>\n "
									."<th scope=\"col\">Order Cost</th>\n "
									."<th scope=\"col\">Order Time</th>\n "
									."<th scope=\"col\">Order Status</th>\n "
									."<th scope=\"col\">First Name</th>\n "
									."<th scope=\"col\">Last Name</th>\n "
									."<th scope=\"col\">Movie Choice</th>\n "
									."<th scope=\"col\">Ticket Quantity</th>\n "
									."</tr>\n ";
									
								
								while($row = mysqli_fetch_assoc($result)){
									echo "<tr>\n ";
									echo "<td>",$row["order_id"],"</td>\n ";
									echo "<td>$",$row["order_cost"],"</td>\n ";
									echo "<td>",$row["order_time"],"</td>\n ";
									echo "<td>",$row["order_status"],"</td>\n ";
									echo "<td>",$row["firstname"],"</td>\n ";
									echo "<td>",$row["lastname"],"</td>\n ";
									echo "<td>",$row["movie"],"</td>\n ";
									echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
									echo "<td> <a href='manager.php?order_edit=$row[order_id]'>Edit</a> </td>\n ";
									echo "</tr>\n ";
								}
								echo "</table>\n ";
								
								unset($_POST["Sort_by_cost"]);
								mysqli_free_result($result);
								mysqli_close($conn);

						}
						}
					} else {
						require_once ("settings.php");
						
						$conn = mysqli_connect($host,$user,$pwd,$sql_db);
					
						if (!$conn) {
							echo "<p>Database connection failure</p>";
						} else {
						
							$sql_table = "orders";
							
							$query = "SELECT * from $sql_table ORDER BY order_cost DESC";
							
							$result = mysqli_query($conn, $query);
							
							if (mysqli_num_rows($result) == 0) {
								echo "<h1>No Records Found</h1>";
							} else {
								echo "<h1>Displaying All Orders By Descending Cost</h1><br>";
								echo "<table border=\"1\">\n";
								echo "<tr>\n "
									."<th scope=\"col\">Order ID</th>\n "
									."<th scope=\"col\">Order Cost</th>\n "
									."<th scope=\"col\">Order Time</th>\n "
									."<th scope=\"col\">Order Status</th>\n "
									."<th scope=\"col\">First Name</th>\n "
									."<th scope=\"col\">Last Name</th>\n "
									."<th scope=\"col\">Movie Choice</th>\n "
									."<th scope=\"col\">Ticket Quantity</th>\n "
									."</tr>\n ";
									
								
								while($row = mysqli_fetch_assoc($result)){
									echo "<tr>\n ";
									echo "<td>",$row["order_id"],"</td>\n ";
									echo "<td>$",$row["order_cost"],"</td>\n ";
									echo "<td>",$row["order_time"],"</td>\n ";
									echo "<td>",$row["order_status"],"</td>\n ";
									echo "<td>",$row["firstname"],"</td>\n ";
									echo "<td>",$row["lastname"],"</td>\n ";
									echo "<td>",$row["movie"],"</td>\n ";
									echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
									echo "<td> <a href='manager.php?order_edit=$row[order_id]'>Edit</a> </td>\n ";
									echo "</tr>\n ";
								}
								echo "</table>\n ";
								
								unset($_POST["Sort_by_cost"]);
								mysqli_free_result($result);
								mysqli_close($conn);

						}
						}
						
					}
				} else {
					echo "<h1>Please Choose Desired Order</h1>";
				}
			}
			
			if (isset($_POST["Display_pending"])) {
		
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
				
					$sql_table = "orders";
					
					$query = "SELECT * from $sql_table WHERE order_status LIKE 'PENDING%' ";
					
					$result = mysqli_query($conn, $query);
					
					if (mysqli_num_rows($result) == 0) {
						echo "<h1>No Pending Orders Found</h1>";
					} else {
						echo "<h1>Displaying Pending Orders</h1><br>";
						echo "<table border=\"1\">\n";
						echo "<tr>\n "
							."<th scope=\"col\">Order ID</th>\n "
							."<th scope=\"col\">Order Cost</th>\n "
							."<th scope=\"col\">Order Time</th>\n "
							."<th scope=\"col\">Order Status</th>\n "
							."<th scope=\"col\">First Name</th>\n "
							."<th scope=\"col\">Last Name</th>\n "
							."<th scope=\"col\">Movie Choice</th>\n "
							."<th scope=\"col\">Ticket Quantity</th>\n "
							."</tr>\n ";
							
						
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>\n ";
							echo "<td>",$row["order_id"],"</td>\n ";
							echo "<td>$",$row["order_cost"],"</td>\n ";
							echo "<td>",$row["order_time"],"</td>\n ";
							echo "<td>",$row["order_status"],"</td>\n ";
							echo "<td>",$row["firstname"],"</td>\n ";
							echo "<td>",$row["lastname"],"</td>\n ";
							echo "<td>",$row["movie"],"</td>\n ";
							echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
							echo "<td> <a href='manager.php?order_edit=$row[order_id]'>Edit</a> </td>\n ";
							echo "</tr>\n ";
						}
						echo "</table>\n ";
						
						unset($_POST["Display_pending"]);
						mysqli_free_result($result);
						mysqli_close($conn);

				}
				}
			}
			
			if (isset($_POST["Search_name"])) {
				if (($_POST["Search_name"]) != "") {
		
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
				
					$sql_table = "orders";
					
					$Search_name = sanitise_input($_POST["Search_name"]);
					
					$query = "SELECT * from $sql_table WHERE firstname LIKE '$Search_name%' ";
					
					$result = mysqli_query($conn, $query);
					
					if (mysqli_num_rows($result) == 0) {
						echo "<h1>No Records Found For: " . $Search_name . "</h1>";
					} else {
						echo "<h1>Displaying Search Result For: " . $Search_name . "</h1><br>";
						echo "<table border=\"1\">\n";
						echo "<tr>\n "
							."<th scope=\"col\">Order ID</th>\n "
							."<th scope=\"col\">Order Cost</th>\n "
							."<th scope=\"col\">Order Time</th>\n "
							."<th scope=\"col\">Order Status</th>\n "
							."<th scope=\"col\">First Name</th>\n "
							."<th scope=\"col\">Last Name</th>\n "
							."<th scope=\"col\">Movie Choice</th>\n "
							."<th scope=\"col\">Ticket Quantity</th>\n "
							."</tr>\n ";
							
						
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>\n ";
							echo "<td>",$row["order_id"],"</td>\n ";
							echo "<td>$",$row["order_cost"],"</td>\n ";
							echo "<td>",$row["order_time"],"</td>\n ";
							echo "<td>",$row["order_status"],"</td>\n ";
							echo "<td>",$row["firstname"],"</td>\n ";
							echo "<td>",$row["lastname"],"</td>\n ";
							echo "<td>",$row["movie"],"</td>\n ";
							echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
							echo "<td> <a href='manager.php?order_edit=$row[order_id]'>Edit</a> </td>\n ";
							echo "</tr>\n ";
						}
						echo "</table>\n ";
						
						unset($_POST["Search_name"]);
						mysqli_free_result($result);
						mysqli_close($conn);
						}
				}
				
			} else {
				echo "<h1>Please Enter a Customer Name</h1>";
			}
			}
			
			if (isset($_POST["Display_movie"])) {
				if (($_POST["Display_movie"]) != "") {
		
				require_once ("settings.php");
				
				$conn = mysqli_connect($host,$user,$pwd,$sql_db);
			
				if (!$conn) {
					echo "<p>Database connection failure</p>";
				} else {
				
					$sql_table = "orders";
					
					$Display_movie = $_POST["Display_movie"];
					
					$query = "SELECT * from $sql_table WHERE movie LIKE '$Display_movie%' ";
					
					$result = mysqli_query($conn, $query);
					
					if (mysqli_num_rows($result) == 0) {
						echo "<h1>No Records Found For: " . $Display_movie. "</h1>";
					} else {
						echo "<h1>Displaying Records For: " . $Display_movie. "</h1><br>";
						echo "<table border=\"1\">\n";
						echo "<tr>\n "
							."<th scope=\"col\">Order ID</th>\n "
							."<th scope=\"col\">Order Cost</th>\n "
							."<th scope=\"col\">Order Time</th>\n "
							."<th scope=\"col\">Order Status</th>\n "
							."<th scope=\"col\">First Name</th>\n "
							."<th scope=\"col\">Last Name</th>\n "
							."<th scope=\"col\">Movie Choice</th>\n "
							."<th scope=\"col\">Ticket Quantity</th>\n "
							."</tr>\n ";
							
						
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>\n ";
							echo "<td>",$row["order_id"],"</td>\n ";
							echo "<td>$",$row["order_cost"],"</td>\n ";
							echo "<td>",$row["order_time"],"</td>\n ";
							echo "<td>",$row["order_status"],"</td>\n ";
							echo "<td>",$row["firstname"],"</td>\n ";
							echo "<td>",$row["lastname"],"</td>\n ";
							echo "<td>",$row["movie"],"</td>\n ";
							echo "<td>",$row["ticket_quantity"]," ticket/s</td>\n ";
							echo "<td> <a href='manager.php?order_edit=$row[order_id]'>Edit</a> </td>\n ";
							echo "</tr>\n ";
						}
						echo "</table>\n ";
						
						unset($_POST["Display_movie"]);
						mysqli_free_result($result);
						mysqli_close($conn);

				}
				}
			} else {
				echo "<h1>Please Choose a Movie</h1>";
			}
			}
			
			?>
			</div>
			
			
		
		
		
		
		
	</body>
</html>