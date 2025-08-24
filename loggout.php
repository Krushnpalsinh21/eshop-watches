<?php
	include_once('conffig.php'); 
	session_destroy();
	echo "<script>window.open('index.php','_self')</script>";
?>