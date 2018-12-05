<?php

include ('dbcon.php');

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];


	//$query ="SELECT * FROM `admin` WHERE 'username'= '$username' AND 'password' = '$password'";
	$query = "SELECT * FROM `admin` WHERE username = '$username' && password = '$password'";﻿

	$data = mysqli_query($con , $query);
	$total = mysqli_num_rows($data);

	echo $total;

	

     }
}