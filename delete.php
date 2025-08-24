<?php
include_once "conffig.php"; 
$id = $_GET['id'];
$query = "DELETE from products where id = $id";

$result = $conn->query($query);
if($result === TRUE){
	
	// Use unlink() function to delete a file
	$file_pointer = "uploads/".$_GET['image'];    
	if (!unlink($file_pointer)) {  
	    echo ("$file_pointer cannot be deleted due to an error");  
	}  
	else {  
	    echo ("$file_pointer has been deleted");  
	    header("Location: productss.php");
	} 
}else{
	echo "Error";
}
$conn->close();
?>