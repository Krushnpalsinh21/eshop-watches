<?php
include_once "conffig.php"; 
$Error = "";
$errori = "";

if (isset($_POST["register"])) {
	$name = $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];

	$temppassword = $_POST["password"];

	$tempcpassword = $_POST["cpassword"];

	if ($temppassword == $tempcpassword) {
		$password = password_hash($temppassword, PASSWORD_DEFAULT);
	}else{
		die("Password mismatch");
	}
	$sql = "SELECT * FROM myusers WHERE username = '$username'";
	$results = $conn->query($sql);
	if ($results->num_rows== 0) {
		$sql2 = "INSERT INTO myusers (name,username,email,password) VALUES ('$name','$username','$email','$password')";

		if ($conn->query($sql2) === TRUE) {
			echo "<script>window.open('loggin.php','_self')</script>";
		}else{
			echo "Error".$sql2."<br>".$conn->error;
		}
	}else {
		$Error = "User already exists";
	}
	

	$conn->close();
}
?>