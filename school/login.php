
<?php
include ('dbcon.php');
 session_start();

 if(isset($_SESSION['uid']))
 {
   header('location:admin/admindash.php');
 }


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="" method="post">
  <input type="text" name="username"><br><br>
  <input type="text" name="password"><br><br>
  <input type="submit" name="submit" value="Login"/>
  </form>
</body>
</html>
<?php

if (isset($_POST['submit']))
{
  $user = $_POST['username'];
  $pwd =  $_POST['password'];

  $query = "SELECT * FROM  admin WHERE username = '$user' && password = '$pwd'";
  $run = mysqli_query($con, $query);
  $total =mysqli_num_rows($run);
  //echo $total;

  if($total<1)
  {
   
   ?>
    <script>
      alert ('username or password not match !');
      window.open('login.php' ,'_self');
    </script>

    <?php
  }
  else{

     $data = mysqli_fetch_assoc($run);
     $id =$data['id'];
     //echo "id=".$id;

    
     $_SESSION['uid'] =$id;
     header('location:admin/admindash.php');
  }



} 