<?php
include "conffig.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<body id="back">
	<div class="container">
		<div class="row" id="row">

			<div class="col-lg-12 col-md-12">
        <?php include "logginfunction.php"; ?>
        <form method="POST" action="?">
				<h2>Log in</h2>
				
  
    <label for="uname"><b>Username</b></label>
    <input type="text" maxlength="35" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" maxlength="14" placeholder="Enter Password" name="password" required>
    <br>
     <span style="color:red; margin: 0 auto;"><?php echo $error;?></span>
        
    <button id="button" name="login" type="submit" onclick="showalert()">Login</button>
    <label>
      <script>
        
          function showalert() {
            alert("Login successfully");
          }
        </script>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
 
</form>
				<a  href="reggister.php">Register new Account?</a>
			</div>
		</div>
	</div>


</body>
</html>