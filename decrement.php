<?php

$x =2;

echo $x-- ."<br/>";


echo $x;


//$c =$x++;
//$c =++$x;
//echo $c;


$c =++$x + $x-- - $x++ - --$x;
     3      3      2       2
echo $c;