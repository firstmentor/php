<?php
include ('dbcon.php');

if (isset($_POST['submit']))
{
$id =$_GET['id'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$q ="update res set id=$id, username= '$username', pass='$pass' where id = $id ";
$query =mysqli_query($con, $q);
header ('location: display.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

<div class="col-lg-6 m-auto">
	<form method="post">
		<br><br><div class="card">
			<div class="card-header bg -dark">
				<h1 class="text-info text-center">Insert Operation</h1>
			</div><br><br>


			<label>Username:</label>
			<input type="text" name="username" class="form-control"><br>
			<label>Password:</label>
			<input type="password" name="pass" class="form-control"><br/><br/>
			<button class="btn btn-success" type="submit" name="submit">Submit</button><br>
				

		

        </div>


	</form>

</body>
</html>