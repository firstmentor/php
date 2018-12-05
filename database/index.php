<?php include ('dbconnection.php');?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="insert.php" method="post">
		<table border="1px" align="center" width="50%">

			    <tr>
					<td>Name</td>
					<td><input type="text" name="name" ></td>
				</tr>
			
				<tr>
					<td>Roll Number</td>
					<td><input type="text" name="roll" ></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" ></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" name="phone" ></td>
				</tr>	
				<tr>
					
					<td colspan="3" align="center"><input type="submit" name="submit"  value="submit"></td>
				</tr>		
				
			



		</table>
		


	</form>

</body>
</html>