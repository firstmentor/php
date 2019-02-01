<?php

/*
   in c/c++
  int rollno[10]; max length (memory) 32 int 4 bytes 64 bit  2 bytes
  rollno[0]=01;(int value only) (single platform run) [0] index start 0
  rollno[1] ="vikas"

*/  
 $variable = array(); //function  call array keyword  (php run web application ) (key=>value start)
 $variable[10] =2;
 $variable['abc'] ='pn';

 echo $variable[10] . "<br/>";
 echo $variable['abc'];


// 
 $s = array();
 $s[3] =1;
 $s[2]="vjdjd";
 //$s['a']=3;
 $s[]=4;
 $s[]=5;

 echo "<pre>";
 print_r($s);

 echo $s[0]. "<br>";
 echo $s[1]. "<br>";
 echo $s[2]. "<br>";
echo $s[3]. "<br>";

















$students = array(2,"ram","mohit"); //same type of data//

//print_r($students);
echo $students[0];


$teacher = array(10=>2, 'abc'=>'infosys');    //key=>value   index=>data
echo $teacher[10]. "<br/>";
echo $teacher['abc'];

