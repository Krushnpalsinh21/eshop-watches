<?php
include_once "conffig.php"; 

if (isset($_POST["update"])) {
	$name = $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];

	$temppassword = $_POST["password"];

	$tempcpassword = $_POST["cpassword"];
	$id = $_SESSION['id'];

	if ($temppassword == $tempcpassword) {
		$password = password_hash($temppassword, PASSWORD_DEFAULT);
	}else{
		die("Password mismatch");
	}
	$sql = "UPDATE myusers SET name='$name',username='$username',email='$email',`password`='$password' WHERE id = '$id'";

	if ($conn->query($sql) === TRUE) {
		echo "<script>window.open('loggout.php','_self')</script>";
	}else{
		echo "Error".$sql."<br>".$conn->error;
	}

	$conn->close();
}
?>