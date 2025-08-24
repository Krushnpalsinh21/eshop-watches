<?php 
	include_once('conffig.php'); 

	if(empty($_SESSION['username']))
	{
		header('Location: loggin.php');
	}

  $id = $_GET['id'];
  $fileName = $_GET['fileName'];
  $fileDescription = $_GET['fileDescription'];
  $filePrice = $_GET['filePrice'];
  $fileStock = $_GET['fileStock'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
if(empty($_SESSION['username']))
{
  include "navbar.php";
}
else{
  include "navbar1.php";
}

?>
<br>
<br>
<br>
<br>

<div class="container">
  <h2>Create new Product</h2>
  <form method="POST" action="editfunction.php" class="form" enctype="multipart/form-data">

    <input style="display: none" type="text" class="form-control mb-2 mr-sm-2" id="id" placeholder="Enter Id" name="id" value="<?php echo $id;?>">
    <label for="name" class="mb-2 mr-sm-2">Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Enter Name" name="name" value="<?php echo $fileName;?>">
    <label for="description" class="mb-2 mr-sm-2">Description:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="description" placeholder="Enter Description" name="description" value="<?php echo $fileDescription;?>">
    <label for="price" class="mb-2 mr-sm-2">Price:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="price" placeholder="Enter Price" name="price" value="<?php echo $filePrice;?>">
    <label for="stock" class="mb-2 mr-sm-2">Stock:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="stock" placeholder="Enter Stock" name="stock" value="<?php echo $fileStock;?>">
    <label for="image" class="mb-2 mr-sm-2">Image:</label>
    <input type="file" class="form-control mb-2 mr-sm-2" id="image" placeholder="Enter Image" name="image" >
    <input type="submit" name="submit" value="Edit This Product" class="btn btn-primary mb-2">
  </form>
</div>




</body>
</html>