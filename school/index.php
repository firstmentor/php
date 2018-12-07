<!DOCTYPE html>
<html>
<head>
	<title></title>
<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>	
</head>
<body style="background: green;">

	<a href="admin.php" class="btn btn-primary " style="margin-top: 51px;
margin-left: 1159px;">Admin Login</a>
	<br>
	<br>
	

	
	<center>
	<div class="card" style="width: 40rem;">
  <div class="card-body">
    <h2 class="card-title">Welcome Students Management System</h2>
    
    <form method="post" action="index.php">

    	<div class="form-group">

          <label for="exampleFormControlSelect1">Choose Students</label>
          <select class="form-control"  name="standerd">
          <option value="1">1st</option>
          <option value="2">2st</option>
          <option value="3">3st</option>
          <option value="4">4st</option>
          <option>5st</option>
           </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Enter Rollno</label>
           <input type="number" class="form-control"  placeholder="Roll Number" name="rollno">
        </div>
        <input type="submit" name="submit" value="Show Info">



    </form>	
    
  </div>
</div>
</center>

</body>
</html>


<?php


if(isset($_POST['submit']))

 {
  
  $standerd = $_POST ['standerd'];
  $rollno = $_POST ['rollno'];

  include ('dbcon.php');
  include('function.php');

  showdetails($standerd, $rollno ); //function


 } 