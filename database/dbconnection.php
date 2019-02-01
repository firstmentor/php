<?php


$con = mysqli_connect('localhost', 'root', '', 'school');

if ($con==true){
	echo "connection Established Successfully";
}
else{
	echo "Error ! can't connect with database";
}
?>