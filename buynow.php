<?php
include "conffig.php";
if(empty($_SESSION['username'])) {
    header('Location: loggin.php');
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>buynow</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="jquery-ui.css"> -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="buy.css">
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

<br>
<br>
<br>
<br>
<br>

	
<div class="row">
  <div class="col-75">
    <div id="containeri" class="container">
      <form action="buyfunction.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" required> Shipping address same as billing
        </label>
        <?php
          $iddd= $_SESSION['id'];
          $sql = "SELECT cart.id,cart.productid,products.fileName,products.filePrice FROM cart LEFT JOIN products on cart.productid = products.id where userid = '$iddd'";
          ?>
          <input type="text" name="userid" hidden value="<?php echo $iddd?>">
        <input type="submit" name="checkout" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div id="containeri" class="container">
      
      <?php
      		$iddd= $_SESSION['id'];
      		$sql = "SELECT cart.id,cart.productid,products.fileName,products.filePrice FROM cart LEFT JOIN products on cart.productid = products.id where userid = '$iddd'";

		$result = $conn->query($sql);
$total = 0;

		if ($result->num_rows > 0) {
		    // output data of each row
		    ?>
		    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $result->num_rows?></b></span></h4>
		    <?php
		    while($row = $result->fetch_assoc()) {
          $total += $row['filePrice'];

		     ?>
         <div class="row">
           <div class="col-md-5">
              <a style="color: black;" href="#"> <?php echo $row['fileName']?></a>
           </div>
           <div class="col-md-4">
             Price: <span id="money" >  <?php echo $row['filePrice']?> </span> 
           </div>
           <div class="col-md-3 text-right">
             
          <span>
                <a href="deletecart.php?id=<?php echo $row['id'] ?>&userid=<?php echo $iddd?>&productid=<?php echo $row['productid'] ?>"><i style="color: red;" class="fa fa-times"           aria-hidden="true"></i>
                </a>
          </span>
           </div>
         </div>
		      
          
      

			<?php

			
		   
		} 
		}
      ?>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b> <?php echo $total ;?></b></span></p>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include "footer.php"; ?>
</body>
</html>