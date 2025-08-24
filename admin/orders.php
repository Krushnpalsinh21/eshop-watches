<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
include("../conffig.php");$result=mysqli_query($conn,"SELECT * FROM orders");
?>
<!DOCTYPE html><html><head><title>Orders</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h2>Orders</h2><table border="1" cellpadding="10"><tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>Zip</th></tr>
<?php while($row=mysqli_fetch_assoc($result)){ ?><tr><td><?= $row['id'] ?></td><td><?= $row['firstname'] ?></td><td><?= $row['email'] ?></td><td><?= $row['address'] ?></td><td><?= $row['city'] ?></td><td><?= $row['state'] ?></td><td><?= $row['zip'] ?></td></tr><?php } ?></table></body></html>