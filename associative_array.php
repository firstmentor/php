<?php
//PHP Arrays | PHP Associative Array | Traversing ??
$courses = array ("c++"=>"1000", "java"=>"1200", "Php"=>"12000");

echo "<pre>";
print_r($courses);

foreach ($courses as $key => $value) {
	echo "key is" .$key. "value is" .$value. "</br>";
}