<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
</head>
<body>

	<div class="container">
	<div class="col-lg-12">
	<h1 class="text-center text-warning">Display Table Data</h1>
	<br>
	<br>

	 <table class="table table-striped table-bordered">
	 	<tr class="text-center bg-dark text-white">
	 		<th>ID</th>
	 		<th> Username</th>
	 		<th> Password</th>
	 		<th> Delete</th>
	 		<th> Update</th>
	 	</tr>
   <?php

       include ('dbcon.php');

       $q = "select * from res";
       $query = mysqli_query($con, $q);

       while ($result = mysqli_fetch_array($query)) {
       	
     ?>



	 	<tr class="text-center">
	 		<td><?php echo $result['id']?></td>
	   <td><?php echo $result['username']?></td>
	 		<td><?php echo $result['pass']?></td>

     <td><a class="btn-danger btn" href="delete.php?id=<?php echo $result['id'];?>" class="text-white">Delete</a></td>

     <td><a class="btn-primary btn" href="update.php?id=<?php echo $result['id'];?>" class="text-white">Update</a></td>

     
	 		
        </tr>

        <?php
         }
        ?>

	 	






	 </table>	

</body>
</html>