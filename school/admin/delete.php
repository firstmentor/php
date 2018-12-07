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

<form method="post" action="delete.php">
	<br>
	<br>

	<center><h2>Update Students</h2></center>
	<table border="1px" align="center">
	<tr>
	      <th>Enter Stander</th>

	      <td><input type="number" name="standerd" placeholder="Enter standerd" required="required"></td>
    </tr>
    <tr>
  	      <th>Enter Student Name</th>
	      <td><input type="text" name="name" placeholder="Enter Student Name">
	      </td>
   </tr>
          <td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>
	
</form>
</table>

<table align="center" width="80%" border="2px" style="">
	<tr style="background: green;">
		<td>No</td>
		<td>Image</td>
		<th>Name</th>
		<th>Rollno</th>
		<th>Edit</th>
	</tr>
	<?php

if(isset($_POST['submit'])){

	include ('../dbcon.php');

	$standerd = $_POST['standerd'];
	$name = $_POST['name'];

	//$sql ="SELECT * FROM student WHERE 'standerd' = '$standerd' AND 'name' LIKE '%$name%'";
	$query ="SELECT * FROM student WHERE standerd = '$standerd' && name LIKE '%$name%'";

	$run =mysqli_query($con, $query);
    // $total =mysqli_num_rows($run);

    // echo $total;


	if(mysqli_num_rows($run)<1){


	echo "<tr><td colspan'5'>NO recode Found</td></tr>"	;

	}

	else{
		$count =0;
		while($data =mysqli_fetch_assoc($run))
		{  
			$count++;

           ?>
           <tr align="center">
           	<td><?php echo $count; ?></td>
           	<td>image</td>
           	<td><?php echo $data['name']; ?></td>
           	<td> <?php echo $data['rollno'] ?></td>
           	<td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
           </tr>
           
           <?php


		}



	}
}

?>	


</table>
