<?php
include "conffig.php";
	$userid = $_GET['userid'];
	$productid = $_GET['productid'];
	


	$sql = "INSERT INTO cart (userid,productid) VALUES ('$userid','$productid')";
	if ($conn->query($sql) === TRUE) {
		echo "<script>window.open('index.php','_self')</script>";
	}else{
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
?>
