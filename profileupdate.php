<?php 
	include_once('conffig.php'); 

	if(empty($_SESSION['username']))
	{
		header('Location: loggin.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
<body id="bud">

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
    <div class="row" id="row">

      <div class="col-lg-12 col-md-12">
        
        <form method="POST" action="profileupdatefunction.php">
          <h1 style="color: white;">Update</h1>
                  <p style="color: white;" class="col">Please fill in this form to update your account.</p>
                  <hr>

                  <label style="color: white;" for="name"><b>Name</b></label>
                  <input type="text" placeholder="Enter Name" name="name" value="<?php echo $_SESSION['name'] ?>"  id="name" required>

                  <label style="color: white;" for="username"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="username" value="<?php echo $_SESSION['username'] ?>"  id="username" required>

                  <label style="color: white;" for="email"><b>Email</b></label>
                  <input type="email" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['email'] ?>"  id="email" required>

                  <label style="color: white;" for="password"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" id="password" required>

                  <label style="color: white;" for="Cpasswword"><b>Confirm Password</b></label>
                  <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required>
                  <hr>
                  <p style="color: white;" class="col">By updating your account you agree to our <a href="#">Terms & Privacy</a>.</p>

                  <button id="button" name="update" type="submit" class="registerbtn">Register</button>
                
                
               
        </form>
        
      </div>
    </div>
  </div>

</body>
</html>