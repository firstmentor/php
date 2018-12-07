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
<?php include('header.php');?>

<form  method="post" enctype="multipart/form-data">
	<br>
	<br>
	<br>
	<br>
	<CENTER><h2>Add students</h2></CENTER>

<table border="1px" align="center">
	<tr>
		<td>Roll No</td>
		<td><input type="text" name="rollno"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"></td>
	</tr>	
	<tr>
		<td>City</td>
		<td><input type="text" name="city"></td>
	</tr>
	<tr>
		<td>Parents number</td>
		<td><input type="text" name="pcon"></td>
	</tr>
	<tr>
		<td>Standerd</td>
		<td><input type="text" name="std"></td>
	</tr>
	<tr>
		<td>Image</td>
		<td><input type="file" name="simg"></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" name="submit" value="submit">
		</td>
	</tr>		
	</table>
</form>

<?php
include('../dbcon.php');
if(isset($_POST['submit'])){

	$rollno = $_POST['rollno'];
	$name   = $_POST['name'];
	$city   = $_POST['city'];
	$pcon   = $_POST['pcon'];
    $std    = $_POST['std'];
    // $imagename =$_FILES['simg']['name'];
    // $tempname = $_FILES['simg']['tmp_name'];

    // move_uploaded_file($tempname, "../dataimg/$imagename");

    $query ="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`) VALUES ('$rollno', '$name', '$city', '$pcon', '$std')";
    $run =mysqli_query($con, $query);
    if($run == true){

    	?>
    	<script>
    		alert('Data Insert Successfully');
    	</script>

    	<?php
    }


}