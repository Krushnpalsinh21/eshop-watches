<?php
include("../conffig.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password' AND admin=1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header("Location: index.php");
    } else { $error = "Invalid admin login!"; }
}
?>
<!DOCTYPE html><html><head><title>Admin Login</title><link rel="stylesheet" href="admin_style.css"></head>
<body><div class="login-box"><h2>Admin Login</h2>
<form method="POST"><input type="text"  maxlength="35" name="username" placeholder="Username" required><br>
<input type="password" name="password"  maxlength="14" placeholder="Password" required><br>
<button type="submit">Login</button>
<p style="color:red;"><?php echo isset($error)?$error:''; ?></p></form></div></body></html>