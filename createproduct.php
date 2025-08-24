<?php
include_once "conffig.php"; 

if (isset($_POST["submit"])) {
	$type = $_POST["produkte"];
	$fileName = $_POST["name"];
	$fileDescription = $_POST["description"];
	$filePrice = $_POST["price"];
	$fileStock = $_POST["stock"];
	$fileUpload = $_FILES["image"]["name"];
	$fileUploadTmp = $_FILES["image"]["tmp_name"];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["image"]["tmp_name"]);

	if($check !== false) {
	   echo "File is an image - " . $check["mime"] . ".";
	   $uploadOk = 1;
	} else {
	   echo "File is not an image.";
	   $uploadOk = 0;
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["image"]["size"] > 5000000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}



	if ($uploadOk == 0) {
  		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	}else {
	  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

	    $sql = "INSERT INTO products (fileName,fileUpload,fileDescription,filePrice,fileStock,type) VALUES ('$fileName','$fileUpload','$fileDescription','$filePrice','$fileStock','$type')";

	    if($conn->query($sql) === TRUE){
	    	echo "<script>window.open('productss.php','_self')</script>";
	    }else{
	    	echo "Error";
	    }
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	}
	$conn->close();
}

?>