<?php

$value ="pninfosys"
$exp =time() + 86400;
setcookie("name", $value, $exp);



echo $_COOKIE['name'];



$unsetcookie = time() -86400;

setcookie("name", "" , $unsetcookie);