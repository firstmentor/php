	

<?php
$b = array (1,2,3,4, array(5,6,7,8));
foreach ($b as $key => $v1) {
	
	if(is_array($v1))
	{
		foreach ($v1 as $key => $v) {
			
			echo $key. "=>" .$v. "<br>";
		}
	}
	else {

		echo $key. "=>" .$v1. "<br>";
	}

}
?>
//https://www.youtube.com/watch?v=LZSEIqMaqbk