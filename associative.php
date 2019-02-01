<?php

$students = array ('vikas'=>99, 'mohit'=>20,  'rohit'=>50);

print_r($students);
echo $students['vikas'];


// One way to create an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any",  
                  "Ram"=>"Rani", "Salim"=>"Sara",  
                  "Raghav"=>"Ravina"); 
  
// Second way to create an associative array 
echo$name_two["zack"] = "zara"; 
echo$name_two["anthony"] = "any"; 
echo$name_two["ram"] = "rani"; 
echo$name_two["salim"] = "sara"; 
echo$name_two["raghav"] = "ravina"; 
  
// Accessing the elements directly 
echo "Accessing the elements directly:\n"; 
echo $name_two["zack"], "\n"; 
echo $name_two["salim"], "\n"; 
echo $name_two["anthony"], "\n"; 
echo $name_one["Ram"], "\n"; 
echo $name_one["Raghav"], "\n"; 