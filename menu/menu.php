<?php
//Home Task3

//task1 -> show boolean variables
echo "task1:<br>";
$f = false;
$t = true;
//echo "<h3 style='color: green'>bool:</h3> f (".gettype($f).") = $f, t (".gettype($t).") = $t <br>";
echo '$f = ';
var_dump($f);
echo '<br>$t = ';
var_dump($t);
echo "<hr>";

//task2 -> show array's elements data types
echo 'task2:';
$array=[850, 589, 5*105, 587, 2.887, 'листівка', 59e-7];
echo '<pre>';
var_dump ($array[0]);
var_dump ($array[1]);
var_dump ($array[2]);
var_dump ($array[3]);
var_dump ($array[4]);
var_dump ($array[5]);
var_dump ($array[6]);
echo '</pre>';
var_dump($array);
echo "<hr>";

//task3 -> show elements of array
echo "task3:<br>";
$lessons = ['Українська мова','Матимитика','ЯПС','Англійська мова','Мистецтво','Фізкультура','Інформатика'];
$week = [0,1,3,0,2];

var_dump($lessons);
echo '<br>';
var_dump($week);
echo "<hr>";


echo "task4:";
//show schedule of classes with numeric list
echo ("<ol>
	   <li>$lessons[0]</li>
	   <li>$lessons[1]</li>
	   <li>$lessons[3]</li>
	   <li>$lessons[0]</li>
	   <li>$lessons[2]</li>   
       </ol>");
echo "<hr>";

echo "task5:<br>";
//show schedule of classes with numeric list
echo '<pre>';
print_r($_GET);







