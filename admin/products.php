<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
include("../conffig.php");
$result = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html><html><head><title>Manage Products</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h2>Product List</h2><a href="add_product.php">+ Add New Product</a>
<table border="1" cellpadding="10"><tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Stock</th><th>Image</th><th>Type</th><th>Actions</th></tr>
<?php while($row = mysqli_fetch_assoc($result)){ ?><tr>
<td><?= $row['id'] ?></td><td><?= $row['fileName'] ?></td><td><?= $row['fileDescription'] ?></td><td><?= $row['filePrice'] ?></td><td><?= $row['fileStock'] ?></td>
<td><img src="../images/<?= $row['fileUpload'] ?>" width="50"></td><td><?= $row['type'] ?></td>
<td><a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a> | <a href="delete_product.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a></td></tr>
<?php } ?></table></body></html>