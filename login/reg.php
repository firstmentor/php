<?php

session_start();

//header ('location: login.php');

include ('dbconnect.php');

if(isset($_POST['submit']))
{

	$name  = $_POST['user'];
	$pass  = $_POST['password'];


	$q = "select * form sigin  where name == '$name' && password = '$pass'";
	$result = mysqli_query($con, $q);

	$num =mysqli_num_rows($result);


	if($num == 1){

		echo "duplicate data";
	}
    else{

    	$insert = "insert into sigin (name, password) values ('$name', '$pass')";

    	mysqli_query($con, $insert);
    }
}

?>