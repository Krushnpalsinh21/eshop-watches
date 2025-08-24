<?php
include_once "conffig.php"; 
$Error = "";

if (isset($_POST["send"])) {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];

	$country = $_POST["country"];

	$subject = $_POST["subject"];

	
	$sql = "SELECT * FROM contact WHERE firstname = '$firstname'";
	$results = $conn->query($sql);
	if ($results->num_rows== 0) {
		$sql2 = "INSERT INTO contact (firstname,lastname,email,country,subject) VALUES ('$firstname','$lastname','$email','$country','$subject')";

		if ($conn->query($sql2) === TRUE) {
			echo "<script>window.open('index.php','_self')</script>";
		}else{
			echo "Error".$sql2."<br>".$conn->error;
		}
	}else {
		$Error = "Your Message was not sent";
	}
	

	$conn->close();
}
?>