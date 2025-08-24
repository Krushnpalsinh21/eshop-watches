<?php
include_once "conffig.php"; 
if (isset($_POST["submit"])) {
	$id = $_POST['id'];
	$fileName = $_POST['name'];
	$fileDescription = $_POST['description'];
	$filePrice = $_POST['price'];
	$fileStock = $_POST['stock'];
	$query = "UPDATE products SET fileName='$fileName',fileDescription='$fileDescription',filePrice='$filePrice',fileStock='$fileStock' where id = $id";

	if($result = $conn->query($query)){
	    header("Location: productss.php");

	}else{
		echo "Error";
	}
	$conn->close();
}
?>