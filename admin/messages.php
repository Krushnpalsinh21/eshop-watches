<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
include("../conffig.php");$result=mysqli_query($conn,"SELECT * FROM contact");
?>
<!DOCTYPE html><html><head><title>Messages</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h2>Contact Messages</h2><table border="1" cellpadding="10"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Country</th><th>Subject</th></tr>
<?php while($row=mysqli_fetch_assoc($result)){ ?><tr><td><?= $row['id'] ?></td><td><?= $row['firstname'] ?></td><td><?= $row['lastname'] ?></td><td><?= $row['email'] ?></td><td><?= $row['country'] ?></td><td><?= $row['subject'] ?></td></tr><?php } ?></table></body></html>