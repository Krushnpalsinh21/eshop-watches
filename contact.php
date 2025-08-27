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
  <link rel="stylesheet" type="text/css" href="contact.css">
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
       <br>
      <br>
      <br>
      <br>
      <br>
 

  <div class="text-center">
      <h4 class="showcase-h4">CONTACT US FROM ALL OVER THE WORLD!</h4>
</div>



<div id="con" class="container">
  <form action="contactfunction.php" method="POST">
    <label for="fname" style="color: white;">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname" style="color: white;">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>

    <label for="email" style="color: white;">Email</label>
    <input type="email" id="lname" name="email" placeholder="Your Email.."required>

    <label for="country" style="color: white;">Country</label>
    <select id="country" name="country"required>
      <option value="India">India</option>
      <option value="Russia">Russia</option>
      <option value="USA">USA</option>
      <option value="UK">UK</option>
      <option value="Germany">Germany</option>
      <option value="Kuwait">Kuwait</option>
    </select>

    <label for="subject" style="color: white;">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <button id="button" name="send" type="submit" class="registerbtn">Send</button>
  </form>
</div>

 <!-- Footer -->
<?php include "footer.php"; ?>
  
</body>
</html>