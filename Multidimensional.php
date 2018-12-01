<?php

$students = array ('vikas'=>array('age'=>20, 'marks'=>40, 'class'=>'MCA'),
	               'rahul'=>array('age'=>40, 'marks'=>50, 'class'=>'bca'));

$college = array ('mpct'=>array('teacher'=>array('bca'=>3, 'mca'=>5), 'class'=>40));




//print_r($college);
// echo $students['vikas']['age'];
 echo $college ['mpct']['teacher']['bca'];