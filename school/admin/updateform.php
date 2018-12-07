<?php
session_start();

if(isset($_SESSION['uid']))
{
	//echo $_SESSION['uid'];
	echo "";
}
else{

	header('location: ../login.php');
}
?>
<?php

include ('header.php');
include ('../dbcon.php');


$sid = $_GET['sid'];

$sql ="SELECT * FROM student WHERE id= '$sid'";
$run = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($run);

//echo $data['rollno'];
?>

<form action="updatedata.php" method="post" enctype="multipart/form-data">
	<br>
	<br>
	<br>
	<br>
	<CENTER><h2>Upadte students</h2></CENTER>

<table border="1px" align="center">
	<tr>
		<td>Roll No</td>
		<td><input type="text" name="rollno" value="<?php echo $data['rollno']?>"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $data['name']?>"></td>
	</tr>	
	<tr>
		<td>City</td>
		<td><input type="text" name="city" value="<?php echo $data['city']?>"></td>
	</tr>
	<tr>
		<td>Parents number</td>
		<td><input type="text" name="pcon" value="<?php echo $data['pcont']?>"></td>
	</tr>
	<tr>
		<td>Standerd</td>
		<td><input type="text" name="std" value="<?php echo $data['standerd']?>"></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><input type="file" name="simg" value="<?php echo $data['']?>"></td>
	</tr>
	<tr>
		<td align="center" colspan="2">

            <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
			<input type="submit" name="submit" value="submit">
		</td>
	</tr>		
	</table>
</form>
