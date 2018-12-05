<?php


$con = mysqli_connect('localhost', 'root', '', 'school');

if ($con){
	echo "connection Established Successfully";
}
else{
	echo "Error ! can't connect with database";
}
?>