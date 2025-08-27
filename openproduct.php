<?php
include "conffig.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Open Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="jquery-ui.css"> -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
	 if (empty($_SESSION['username'])) {
	 	include "navbar2.php";
	 }else{ include "navbar2.php";
	}
	
	 ?>


	 <?php
	  $id = $_GET['id'];
      $sql = "SELECT * FROM products where id = '$id'";
      $query = mysqli_query($conn,$sql);

      while($row = mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $fileName = $row['fileName'];
        $fileDescription = $row['fileDescription'];
        $filePrice = $row['filePrice'];
        $fileStock = $row['fileStock'];
        $fileUpload = $row['fileUpload'];

        ?>
        <?php
      }
    ?>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>

		

<div class="container">
      <div class="row">
         <div class="col-md-6  col-sm-12">
           <div id="demo" class="carousel slide" data-ride="carousel">
  
 	<!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
     <center><img src="uploads/<?php echo $fileUpload ?>" alt="Los Angeles" ></center> 
    </div>
    <div class="carousel-item">
       <center><img src="uploads/<?php echo $fileUpload ?>" alt="Los Angeles" ></center> 
    </div>
    <div class="carousel-item">
       <center><img src="uploads/<?php echo $fileUpload ?>" alt="Los Angeles" ></center> 
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"><i class="fa fa-chevron-left" aria-hidden="true" style="color:black;"></i></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span><i class="fa fa-chevron-right" aria-hidden="true" style="color: black;"></i></span>
  </a>
</div>
         </div>
        
         <div class="col-md-6  col-sm-12">
           <h4><?php echo $fileName;?> &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From <span id="money">Price :<?php echo $filePrice;?></span>  </h4>
           <hr>

           <p>Description: <span id="stocki"><?php echo $fileDescription  ?></span></p>
          
           <p>Stock: <span id="stock"><?php echo $fileStock ?> left</span></p>

           <?php 
           if (empty($_SESSION['username'])) {
           	?>
           	<a href="loggin.php"><button id="buttoni" name="buynow	" type="submit" class="registerbtn">Login to add to Cart</button></a>
           	<?php
           }else{
           	?>
           	<a href="addtocart.php?userid=<?php echo $_SESSION['id']?>&productid=<?php echo $id?>"><button id="buttoni" name="buynow	" type="submit" class="registerbtn">Add to Cart</button></a>
           	<?php
           }
           ?>

           <ul style="list-style-type:square">
				<li>Free Returns</li> 
				<li>Free Shipping</li>          	
           </ul>
         </div>


      </div>
  </div>


 <!-- Footer -->
<?php include "footer.php"; ?>
  
</body>
</html>