<?php
include_once "conffig.php"; 
$Error = "";
$userid = $_POST['userid'];

if (isset($_POST["checkout"])) {
	$firstname = $_POST["firstname"];
	$email = $_POST["email"];

	$address = $_POST["address"];
	$city = $_POST["city"];

	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$cardname = $_POST["cardname"];
	$cardnumber = $_POST["cardnumber"];

	$expmonth = $_POST["expmonth"];

	$expyear = $_POST["expyear"];
	$cvv = $_POST["cvv"];
	$sameadr = $_POST["sameadr"];


	
	$sql = "SELECT * FROM orders WHERE firstname = '$firstname'";
	$results = $conn->query($sql);
	if ($results->num_rows== 0) {
		$sql2 = "INSERT INTO orders (firstname,email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,cvv,sameadr) VALUES ('$firstname','$email','$address','$city','$state' ,'$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv','$sameadr')";

		if ($conn->query($sql2) === TRUE) {
			echo "<script>window.open('index.php','_self')</script>";
		}else{
			echo "Error".$sql2."<br>".$conn->error;
		}
	}else {
		$Error = "Your Message was not sent";
	}
	
	$sql = "DELETE FROM cart WHERE userid in ($userid)";
	if ($conn->query($sql) === TRUE) {
		echo "<script>window.open('index.php','_self')</script>";
	}else{
		echo "Error".$sql."<br>".$conn->error;
	}

	$conn->close();
}
?>