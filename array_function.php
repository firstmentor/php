<?php

/*in_array() :Checks if a specified value exists in an array.
range() :Creates an array containing a range of element.
array_unique() : removes duplicate values from an array.
array_search() Searches an array for a given value and retirn the key.
array_slice() returns selected parts of an array.*/

$a = array('vikas', 'vijay');
//$a =['vikas', 'raj'];

// echo "<pre>";
// print_r($a);

if (in_array('vikas', $a))
{
	echo "match";
}
else
{
	echo "not match";
}


// range

/*$a = range('a','z');
echo "<pre>";
print_r($a);*/


//array_unique

$a = array('vikas','raj','vikas');
echo "<pre>";
print_r(array_unique($a));


//array_slice()

$a =array ("red","green","black","yellow");
print_r(array_slice($a,2));