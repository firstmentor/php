<?php
if (isset($_POST['submit'])) {


 $name   = $_POST['name'];
 $roll   = $_POST['roll'];
 $address = $_POST['address'];
 $phone  = $_POST['phone'];


 $con =mysqli_connect( 'localhost','root', '', 'school');

 $query ="INSERT INTO `res`(`name`, `roll`, `address`, `phone`) VALUES ('$name','$roll','$address','$phone')";
 $run = mysqli_query($con, $query); //executed
 if($run==TRUE)
 echo "Data insert Successfully";
 else
 
  echo "Error !";

}












?>