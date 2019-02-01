<?php

$Firstname = "pninfosys"; //local variable
$Lastname = "PHP ";

function example(){

	//global $Firstname;   global keyword
	echo $Firstname;
}

// function example2(){

// 	echo $GLOBALS ['Lastname']. $GLOBALS ['Firstname'];

// }


?>

<html>
<body>
	<h1> <?php example(); ?> </h1>
	<h1> <?php example2(); ?></h1>
</body>
</html>	