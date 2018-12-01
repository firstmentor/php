<?php


$cars = array("valvo", "BMW", "Toyota");
sort($cars);
//rsoct($cars);

$clength = count ($cars);
for($x =0; $x<$clength; $x++){

	echo $cars[$x];
	echo "<br>";

}

//asort

$age = array("peter"=>"35", "Ben"=>"37", "joe"=>"43");
asort($age);

foreach ($age as $x => $x_value) {
	
	echo "key=" .$x ." , value=". $x_value;

	echo "<br>";
}