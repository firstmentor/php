<h1 align="center">

<?php

session_start();
if(isset($_SESSION["Uname"])) //Agar session par data set hua hai to 
echo "Welcome " .  $_SESSION["Uname"];
else


echo "you are not login";

?>
</h1>

<h2>
	<a href="logout.php" style="float: right;">Logout</a>
</h2>