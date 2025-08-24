<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit(); }
include("../conffig.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];$desc=$_POST['description'];$price=$_POST['price'];$stock=$_POST['stock'];$type=$_POST['type'];
    $image=$_FILES['image']['name'];$target="../images/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    $sql="INSERT INTO products (fileName,fileUpload,fileDescription,filePrice,fileStock,type) VALUES ('$name','$image','$desc','$price','$stock','$type')";
    mysqli_query($conn,$sql);header("Location: products.php");
}
?>
<!DOCTYPE html><html><head><title>Add Product</title><link rel="stylesheet" href="admin_style.css"></head>
<body><h2>Add Product</h2><form method="POST" enctype="multipart/form-data">
<input type="text" name="name" placeholder="Product Name" required><br>
<textarea name="description" placeholder="Description"></textarea><br>
<input type="text" name="price" placeholder="Price" required><br>
<input type="text" name="stock" placeholder="Stock" required><br>
<input type="text" name="type" placeholder="Category"><br>
<input type="file" name="image" required><br><button type="submit">Add</button></form></body></html>