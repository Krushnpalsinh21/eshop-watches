<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
include("../conffig.php");$id=$_GET['id'];
$product=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM products WHERE id=$id"));
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST['name'];$desc=$_POST['description'];$price=$_POST['price'];$stock=$_POST['stock'];$type=$_POST['type'];
    if ($_FILES['image']['name']) {$image=$_FILES['image']['name'];$target="../images/".basename($image);move_uploaded_file($_FILES['image']['tmp_name'],$target);} else {$image=$product['fileUpload'];}
    $sql="UPDATE products SET fileName='$name',fileDescription='$desc',filePrice='$price',fileStock='$stock',type='$type',fileUpload='$image' WHERE id=$id";
    mysqli_query($conn,$sql);header("Location: products.php");
}
?>
<!DOCTYPE html><html><head><title>Edit Product</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h2>Edit Product</h2><form method="POST" enctype="multipart/form-data">
<input type="text" name="name" value="<?= $product['fileName'] ?>" required><br>
<textarea name="description"><?= $product['fileDescription'] ?></textarea><br>
<input type="text" name="price" value="<?= $product['filePrice'] ?>" required><br>
<input type="text" name="stock" value="<?= $product['fileStock'] ?>" required><br>
<input type="text" name="type" value="<?= $product['type'] ?>"><br>
<img src="../images/<?= $product['fileUpload'] ?>" width="80"><br>
<input type="file" name="image"><br><button type="submit">Update</button></form></body></html>