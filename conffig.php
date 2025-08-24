<?php
session_start();
$server = "localhost";
$servername = "root";
$serverpass = "";
$db = "eshopwatch";

$conn = mysqli_connect($server,$servername,$serverpass,$db);

if(!$conn){
	die("Connection error");
}

?>