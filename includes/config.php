<?php 

ob_start(); // turns on output buffering
session_start();

$timezone = date_default_timezone_set("America/New_York");
$con = mysqli_connect("localhost", "root", "", "thenetberry");

if(mysqli_connect_errno()) {
	echo "Failed to Connect" . mysqli_connect_errno();
}
?>