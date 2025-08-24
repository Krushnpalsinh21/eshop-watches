<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
?>
<!DOCTYPE html><html><head><title>Admin Dashboard</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h1>Welcome, <?php echo $_SESSION['admin']; ?></h1>
<nav><a href="products.php">Manage Products</a> | <a href="orders.php">Orders</a> | <a href="users.php">Users</a> | <a href="messages.php">Messages</a> | <a href="logout.php">Logout</a></nav>
</body></html>