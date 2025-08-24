<?php 
	include_once('conffig.php'); 
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM myusers WHERE username = '$username'";
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($query);

	if(empty($username)) {
		header('Location: loggin.php');
	}else if ($row['admin'] != 1) {
    header('Location: index.php');
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
<div class="container" style="padding-top: 100px;">
  <h2>Create new Product</h2>
  <form method="POST" action="createproduct.php" class="form" enctype="multipart/form-data">
    <label for="name" class="mb-2 mr-sm-2">Name:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Enter Name" name="name">
    <label for="description" class="mb-2 mr-sm-2">Description:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="description" placeholder="Enter Description" name="description">
    <label for="price" class="mb-2 mr-sm-2">Price:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="price" placeholder="Enter Price" name="price">
    <label for="stock" class="mb-2 mr-sm-2">Stock:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="stock" placeholder="Enter Stock" name="stock">
    <label for="image" class="mb-2 mr-sm-2">Image:</label>
    <input type="file" class="form-control mb-2 mr-sm-2" id="image" placeholder="Enter Image" name="image">
    <select id="produkte" name="produkte" class="custom-select">

       <option value="Index">Index</option>
       <option value="Indexi">Indexi</option>
      <option value="News">News</option>
      <option value="Luxuary">Luxuary</option>
      <option value="New1">New1</option>
      <option value="Watches">Watches</option>
      <option value="Watchunder">Watchunder</option>
      <option value="Menwatch">Menwatch</option>
        <option value="Menwatchunder">Menwatchunder</option>
      <option value="Womenwatch">Womenwatch</option>
      <option value="Womenwatch1">Womenwatch1</option>
      <option value="Classic">Classic</option>
      <option value="Classic1">Classic1</option>
      <option value="Straps">Watch straps</option>
      <option value="Straps1">Watch straps1</option>
     
       
      
       
    </select>
    <br>
    <input type="submit" name="submit" value="Enter New Product" class="btn btn-primary mb-2">

  </form>
</div>
<br>
<div class="container">
  <h2>Products Table</h2>      
  <table class="table">
    <thead>
      <tr>
        <th>File Name</th>
        <th>File Description</th>
        <th>File Price</th>
        <th>File Stock</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM products";
        $query = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($query)){
          $id = $row['id'];
          $fileName = $row['fileName'];
          $fileDescription = $row['fileDescription'];
          $filePrice = $row['filePrice'];
          $fileStock = $row['fileStock'];
          $fileUpload = $row['fileUpload'];

          ?>
            <tr>
              <td><?php echo $fileName ?></td>
              <td><?php echo $fileDescription ?></td>
              <td><?php echo $filePrice ?> $</td>
              <td><?php echo $fileStock ?> left</td>
                  <td><a href="edit.php?id=<?php echo $id;?>&fileName=<?php echo $fileName;?>&fileDescription=<?php echo $fileDescription;?>&filePrice=<?php echo $filePrice;?>&fileStock=<?php echo $fileStock;?>&image=<?php echo $fileUpload;?>"><button class="btn btn-success">Edit</button> </a></td>
                <td><a href="delete.php?id=<?php echo $id;?>&image=<?php echo $fileUpload;?>"><button class="btn btn-danger">Delete</button> </a></td>
            </tr>
          <?php
        }
      ?>

    </tbody>
  </table>
</div>



</body>
</html>