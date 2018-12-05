<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h2>Login Form</h2>
			<form action="validate.php" method="post">
				<label>Username:</label>
				<input type="text" name="name" class="form-control">
				<label>Password:</label>
				<input type="Password" name="password" class="form-control">
				<button type="submit"class="btn btn-primary">Login</button>
				
             </form>
         </div>

         <div class="col-lg-6">
			<h2>Signin Form</h2>
			<form action="reg.php" method="post">
				<label>Username:</label>
				<input type="text" name="user" class="form-control">
				<label>Password:</label>
				<input type="Password" name="password" class="form-control">
				<button type="submit"class="btn btn-primary" name="submit">signin</button>
				
             </form>
         </div>
     </div>
 </div>

			



		

</body>
</html>