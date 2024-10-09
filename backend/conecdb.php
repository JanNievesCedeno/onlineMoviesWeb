<?php


$conex = mysqli_connect("localhost","root","","movies");

if (!$conex) {
	die("Database connection failed!" . mysqli_connect_error());
} 


?>