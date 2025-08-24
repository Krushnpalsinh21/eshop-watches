<?php
include "conffig.php";
	$id = $_GET['id'];
	$userid = $_GET['userid'];
	$productid = $_GET['productid'];
	


	$sql = "DELETE FROM cart WHERE id = $id and userid = $userid and productid = $productid ";
	if ($conn->query($sql) === TRUE) {
		echo "<script>window.open('buynow.php','_self')</script>";
	}else{
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
?>