<!DOCTYPE html>
<html lang="en">
<head>
	<title>Process Order</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Process Order" />
	<meta name="keywords"    content="PHP MySql" />
</head>

<?php

	session_start();
	
	if (!isset($_SESSION["FirstName"])) {
		header("location:payment.php");
		}

	require_once ("settings.php");
	
	$conn = mysqli_connect($host,$user,$pwd,$sql_db);
	
	
	
	if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
		
		function order_cost($Ticket_quantity,$Popcorn,$Drink,$Choc_top){
			$int_value = intval($Ticket_quantity);
			$int_value2 = intval($Popcorn);
			$int_value3 = intval($Drink);
			$int_value4 = intval($Choc_top);
			return ($int_value * 18) + ($int_value2 * 8) + ($int_value3 * 5) + ($int_value4 * 7);
			}
		
		
		function sanitise_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
	
		
		if (isset($_POST["submit"])) {
			$FirstName = sanitise_input($_POST["FirstName"]);
			$LastName = sanitise_input($_POST["LastName"]);
			$Email = sanitise_input($_POST["Email"]);
			$Phone = sanitise_input($_POST["Phone"]);
			$Movie = sanitise_input($_POST["Movie"]);
			$Ticket_quantity = sanitise_input($_POST["Ticket_quantity"]);
			$Card_type = sanitise_input($_POST["Card_type"]);
			$Card_name = sanitise_input($_POST["Card_name"]);
			$Card_number = sanitise_input($_POST["Card_number"]);
			$Card_expiry = sanitise_input($_POST["Card_expiry"]);
			$Card_cvv = sanitise_input($_POST["Card_cvv"]);
			$Popcorn = sanitise_input($_POST["Popcorn"]);
			$Drink = sanitise_input($_POST["Drink"]);
			$Choc_top = sanitise_input($_POST["Choc_top"]);
			
			$_SESSION['FirstName']=$FirstName;
			$_SESSION['LastName']=$LastName;
			$_SESSION['Email']=$Email;
			$_SESSION['Phone']=$Phone;
			$_SESSION['Movie']=$Movie;
			$_SESSION['Ticket_quantity']=$Ticket_quantity;
			$_SESSION['Card_type']=$Card_type;
			$_SESSION['Card_name']=$Card_name;
			$_SESSION['Card_number']=$Card_number;
			$_SESSION['Card_expiry']=$Card_expiry;
			$_SESSION['Popcorn']=$Popcorn;
			$_SESSION['Drink']=$Drink;
			$_SESSION['Choc_top']=$Choc_top;
		}
			
		
		$errMsg = "";
		
		
		if (empty($FirstName)) {
			$errMsg .= "<p>Name is required</p>";
		}
		else if (!preg_match("/^[a-zA-Z]*$/",$FirstName)) {
			$errMsg .= "<p>Only Alphabetical letters allowed in name</p>";
		}
		else if (strlen($FirstName) > 25) {
			$errMsg .= "<p>First name must be under 25 characters</p>";
		}
		
		if (empty($LastName)) {
			$errMsg .= "<p>Last name is required</p>";
		}
		else if (!preg_match("/^[a-zA-Z]*$/",$LastName)) {
			$errMsg .= "<p>Only Alphabetical letters allowed in last name</p>";
		}
		else if (strlen($LastName) > 25) {
			$errMsg .= "<p>Last name must be under 25 characters</p>";
		}
		
		if (empty($Email)) {
			$errMsg .= "<p>Email is required</p>";
		}
		else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
			$errMsg .= "<p>Invalid email format</p>";
		}
		
		if (empty($Phone)) {
			$errMsg .= "<p>Phone is required</p>";
		}
		else if (!preg_match("/^[0-9]*$/",$Phone)) {
			$errMsg .= "<p>Phone numbers must be numeric</p>";
		}
		else if (strlen($Phone) != 10) {
			$errMsg .= "<p>Phone number must be 10 digits</p>";
		}
		
		if (empty($Movie)) {
			$errMsg .= "<p>Movie choice is Required</p>";
		}
		
		if (empty($Ticket_quantity)) {
			$errMsg .= "<p>Ticket quantity is Required</p>";
		}
		else if (!preg_match("/^[0-9]*$/",$Ticket_quantity)) {
			$errMsg .= "<p>Only numbers are allowed for ticket quantity</p>";
		}
		
		if (empty($Card_type)) {
			$errMsg .= "<p>Please select credit card type</p>";
		}
		
		if (empty($Card_name)) {
			$errMsg .= "<p>Please enter name listed on credit card</p>";
		}
		else if (!preg_match("/^[a-zA-Z ]*$/",$Card_name)) {
			$errMsg .= "<p>Only Alphabetical letters allowed for credit card name</p>";
		}
		
		if (empty($Card_number)) {
			$errMsg .= "<p>Please enter credit card number</p>";
		}
		else if (!preg_match("/^[0-9]*$/",$Card_number)) {
			$errMsg .= "<p>Only numbers are allowed for credit card number</p>";
		}
		
		if ($Card_type == 'Visa'){
			if (strlen($Card_number) == 16) {
				if (strpos($Card_number, '4') !== 0) {
					$errMsg .= "<p>Visa card must start with a 4</p>";
					}
				} 
			else {
				$errMsg .= "<p>Visa card must be 16 digits</p>";
			}
			}
			
		if ($Card_type == 'Mastercard'){
			if (strlen($Card_number) == 16) {
				if ((strpos($Card_number, '51') !== 0) AND (strpos($Card_number, '52') !== 0)
						AND (strpos($Card_number, '53') !== 0) AND (strpos($Card_number, '54') !== 0)
						AND (strpos($Card_number, '55') !== 0)){
					$errMsg .="<p>Mastercard number must start with digits 51-55 </p>";
					}
				} else {
					$errMsg .= "<p>Mastercard must be 16 digits</p>";
			}
			}
			
		if ($Card_type == 'American Express'){
			if (strlen($Card_number) == 15) {
				if ((strpos($Card_number, '34') !== 0) AND (strpos($Card_number, '37') !== 0)) {
					$errMsg .= "<p>American Express must start with either 34 or 37</p>";
					}
				} else {
					$errMsg .= "<p>American Express must be 15 digits</p>";
					}
			}
			
		if (empty($Card_expiry)) {
			$errMsg .= "<p>Credit card expiry date is required</p>";
		}
		else if (!preg_match("/^[0-9-]*$/",$Card_expiry)) {
			$errMsg .= "<p>Only numbers and dashes are permitted in card expiry date</p>";
		}
		else if (strlen($Card_expiry) > 5) {
			$errMsg .= "<p>Card expiry should not be greater than 5 characters</p>";
		}
				
		if (empty($Card_cvv)) {
			$errMsg .= "<p>Credit card cvv is required</p>";
		}
		else if (!preg_match("/^[0-9]*$/",$Card_cvv)) {
			$errMsg .= "<p>Only numbers are allowed in card cvv</p>";
		}
		else if (strlen($Card_cvv) > 3) {
			$errMsg .= "<p>Card cvv should not be greater than 3 characters</p>";
		}
		
		if ($errMsg != ""){
			$_SESSION['errMsg']=$errMsg;
			header("location:fix_order.php");
		}
		
		
		
		else {
			
		
		$Order_cost = order_cost($Ticket_quantity,$Popcorn,$Drink,$Choc_top);
		$_SESSION['Order_cost']=$Order_cost;
		
		
		
		$query = "CREATE TABLE IF NOT EXISTS orders(
			order_id INT AUTO_INCREMENT PRIMARY KEY,
			order_cost INT,
			order_time timestamp DEFAULT CURRENT_TIMESTAMP,
			order_status VARCHAR(15) DEFAULT 'PENDING',
			firstname VARCHAR(25),
			lastname VARCHAR(25),
			email VARCHAR(30),
			phone VARCHAR(10),
			movie VARCHAR(50),
			ticket_quantity INT,
			card_type VARCHAR(20),
			card_name VARCHAR(30),
			card_number VARCHAR(30),
			card_expiry VARCHAR(5),
			card_cvv VARCHAR(3))";
			
		$result = mysqli_query($conn, $query);
		
		if (!$result) {
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		}
		
		$query = "INSERT INTO orders (order_cost, firstname, lastname, email, phone, movie, ticket_quantity, card_type, card_name, card_number, card_expiry, card_cvv) 
			values ('$Order_cost', '$FirstName', '$LastName', '$Email', '$Phone', '$Movie', '$Ticket_quantity', '$Card_type', '$Card_name', '$Card_number', '$Card_expiry', '$Card_cvv')";
		
		$result = mysqli_query($conn, $query);
		
		if (!$result) {
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>", mysqli_error($conn);
		} else {
			header("location:receipt.php");
		}
		
		
		mysqli_close($conn);
	}
	}
	
?>