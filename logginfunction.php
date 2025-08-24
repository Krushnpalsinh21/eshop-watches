<?php
include_once "conffig.php"; 
$error = "";

if (isset($_POST["login"])) {
	$username = $_POST["username"];

	$password = $_POST["password"];

	if(empty($username) || empty($password))
	{
		
	 	echo "Ploteso krejt!";
	}else{
		$sql = "SELECT * FROM myusers where username = '$username'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        if(password_verify($password, $row['password'])){
					$_SESSION['username'] = $row['username'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
					$_SESSION['admin'] = $row['admin'];
					echo "<script>window.open('index.php','_self')</script>";
				}
		    }
		} else {
		    $error = "username $username not found";
		}
		
	}
}
?>