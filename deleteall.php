<?php
include "conffig.php";
	
	$userid = $_GET['userid'];
	
	


	$sql = "DELETE FROM cart WHERE userid in ($userid)";
	if ($conn->query($sql) === TRUE) {
		echo "<script>window.open('index.php','_self')</script>";
	}else{
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
?>