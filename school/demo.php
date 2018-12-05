<?php
include ('dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="username"><br><br>
	<input type="text" name="password"><br><br>
	<input type="submit" name="submit" value="Login"/>
	</form>
</body>
</html>
<?php

if (isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd =  $_POST['password'];

	$query = "SELECT * FROM  admin WHERE username = '$user' && password = '$pwd'";
	$data = mysqli_query($con, $query);
	$total =mysqli_num_rows($data);
	echo $total;
}	