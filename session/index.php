<?php

session_start();
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
			   <td colspan="2" align="center"><input type="submit" name="submit" value="login">		






		</table>
		








	</form>

</body>
</html>


<?php
if(isset($_POST['submit'])){


$_SESSION["Uname"] = $_POST['username'];

}
?>