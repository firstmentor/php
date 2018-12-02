<?php

session_start();
if(isset($_SESSION["Uname"])){ //Agar session par data set hua hai to 

	echo "<h1 align='center'> You are already Login</h1>";
	exit();
}
$_SESSION["Uname"] = $_POST['username'];





?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">

		<h2 align="center">Login Session</h2>

		<table align="center" border="1px" width="50%">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="Password"></td>
			</tr>
			<tr>
			   <td colspan="2" align="center"><input type="submit" name="" value="login">		






		</table>
		








	</form>

</body>
</html>
