<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
include("../conffig.php");$result=mysqli_query($conn,"SELECT * FROM myusers");
?>
<!DOCTYPE html><html><head><title>Users</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h2>Users</h2><table border="1" cellpadding="10"><tr><th>ID</th><th>Name</th><th>Username</th><th>Email</th><th>Admin</th></tr>
<?php while($row=mysqli_fetch_assoc($result)){ ?><tr><td><?= $row['id'] ?></td><td><?= $row['name'] ?></td><td><?= $row['username'] ?></td><td><?= $row['email'] ?></td><td><?= $row['admin'] ?></td></tr><?php } ?></table></body></html>