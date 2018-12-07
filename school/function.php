<?php

function showdetails($standerd, $rollno )
{

	include ('dbcon.php');

	$sql =" SELECT * FROM  student WHERE rollno ='$rollno' && standerd = '$standerd'";
	$run =mysqli_query($con, $sql);


	if(mysqli_num_rows($run)>0)
	{
		$data =mysqli_fetch_assoc($run);

		?>

		<table border="1" style="width: 50%" align="center">
			<tr>
				<th colspan="3">Students Details</th>
			</tr>
			<tr>
			     <td rowspan="5">	<img src="dataimg/<?php echo $data ['image']; ?>">
			</td>
			</tr>

			<tr>
			   <td>Roll No</td>
			   <td><?php echo $data ['rollno']; ?></td>
			</tr>
			<tr>
			   <td>Name</td>
			   <td><?php echo $data ['name']; ?></td>
			</tr> 
			<tr>
			   <td>Standerd</td>
			   <td><?php echo $data ['standerd']; ?></td>
			</tr> 
			<tr>
			   <td>Parents No</td>
			   <td><?php echo $data ['pcont']; ?></td>
			</tr>
			<tr>
			   <td>city</td>
			   <td><?php echo $data ['city']; ?></td>
			</tr>         		


         </table>

         <?php

     }
     else
     {

     	echo "<script> alert ('No Student Found .');</script>";
     }

}
?>