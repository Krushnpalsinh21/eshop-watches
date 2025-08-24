<?php
include "conffig.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	 	include "navbar.php";
	 }else{ include "navbar1.php";
	}
	
	 ?>

   <div class="strap"></div>
   <br>
   <br>
   <br>
   <br>
   <br>


    <div class="text-center">
      <h4 class="showcase-h4">THE NEW COLLECTION OF STRAPS IS HERE!</h4>
</div>

  

   <div class="container-fluid">
  <div class="row">
    
    <?php
      $sql = "SELECT * FROM products WHERE type = 'Straps '";
      $query = mysqli_query($conn,$sql);

      while($row = mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $fileName = $row['fileName'];
        $fileDescription = $row['fileDescription'];
        $filePrice = $row['filePrice'];
        $fileStock = $row['fileStock'];
        $fileUpload = $row['fileUpload'];

        ?>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-2 mb-2">
            <div class="card">
              <div class="showcase">
                <img class="card-img-top" src="uploads/<?php echo $fileUpload ?>" alt="<?php echo $fileName ?>">
              </div>
             
              
              <div class="card-body">
                <h4 class="card-title"><?php echo $fileName ?></h4>
                <p class="card-text">Description: <?php echo $fileDescription ?></p>
                <p class="card-text">From US <span id="money">$<?php echo $filePrice ?></span></p>
                <p class="card-text">Stock: <span id="stock"><?php echo $fileStock ?> left</span></p>
                <button class="button">
                  <a href="openproduct.php?id=<?php echo $id ?>" class="<?php if($fileStock == 0){echo "disabled";} ?>">View</a>
                </button>
                
              </div>
            </div>
          </div>
        <?php
      }
    ?>
  </div>
</div>


<div class="container">
      <div class="row">
         <div class="col-md-6  col-sm-12">
           <img src="images/fosii.jpeg" style="width:100%; max-height: 800px;  ">
         </div>
        
         <div class="col-md-6  col-sm-12">
           <img src="images/noth.jpeg" style="width:100%; max-height: 800px;  ">
         </div>

      </div>
  </div>


      <div class="container-fluid">
  <div class="row">
    
    <?php
      $sql = "SELECT * FROM products WHERE type = 'Straps1 '";
      $query = mysqli_query($conn,$sql);

      while($row = mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $fileName = $row['fileName'];
        $fileDescription = $row['fileDescription'];
        $filePrice = $row['filePrice'];
        $fileStock = $row['fileStock'];
        $fileUpload = $row['fileUpload'];

        ?>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mt-2 mb-2">
            <div class="card">
              <div class="showcase">
                <img class="card-img-top" src="uploads/<?php echo $fileUpload ?>" alt="<?php echo $fileName ?>">
              </div>
             
              
              <div class="card-body">
                <h4 class="card-title"><?php echo $fileName ?></h4>
                <p class="card-text">Description: <?php echo $fileDescription ?></p>
                <p class="card-text">From US <span id="money">$<?php echo $filePrice ?></span></p>
                <p class="card-text">Stock: <span id="stock"><?php echo $fileStock ?> left</span></p>
                <button class="button">
                  <a href="openproduct.php?id=<?php echo $id ?>" class="<?php if($fileStock == 0){echo "disabled";} ?>">View</a>
                </button>
                
              </div>
            </div>
          </div>
        <?php
      }
    ?>
  </div>
</div>
	 



<!-- Footer -->
<?php include "footer.php"; ?>


	


</body>
</html>