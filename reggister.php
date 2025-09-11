<?php
include "conffig.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reggister</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body id="boody">

  <div class="container">
		<div class="row" id="row">

			<div class="col-lg-12 col-md-12">
				<?php include "reggisterfunction.php"; ?>
				
				<form method="POST" action="?">
					<h1>Register</h1>
							    <p class="col">Please fill in this form to create an account.</p>
							    <hr>

							    <label for="name"><b>Name</b></label>
							    <input type="text" maxlength="35" placeholder="Enter Name" name="name" id="name" required>

							    <label for="username"><b>Username</b></label>
							    <input type="text" maxlength="35" placeholder="Enter Username" name="username" id="username" required>

							    <label for="email"><b>Email</b></label>
							    <input type="email" maxlength="35" placeholder="Enter Email" name="email" id="email" required>

							    <label for="password"><b>Password</b></label>
							    <input type="password" maxlength="14" placeholder="Enter Password" name="password" id="password" required>
								

							    <label for="Cpasswword"><b>Confirm Password</b></label>
							    <input type="password" placeholder="Confirm Password" maxlength="14" name="cpassword" id="cpassword" required>
							    <hr>
							    <p class="col">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
							    <br>
							    <span style="color:red; margin: 0 auto;"><?php echo $Error;?></span>
							    
							    <button id="button" name="register" type="submit" class="registerbtn">Register</button>
							  
							  
							  <div class="container signin">
							    <p class="col">Already have an account? <a href="loggin.php">Sign in</a>.</p>
							  </div>
				</form>
				
			</div>
		</div>
	</div>
</form>
</body>
</html>