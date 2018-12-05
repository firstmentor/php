<?php
include('dbconnection.php');

function showData(){

	global $con;
    $query = "SELECT * FROM `res`";
    $run = mysqli_query($con, $query);
    if ($run==TRUE){

    	$data = mysqli_fetch_assoc($run);
    	echo "<pre>";
    	print_r($data);
    }
    else{
    	echo "Error !";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php showData(); ?>



</body>
</html>