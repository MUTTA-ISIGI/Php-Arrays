<?php
//INDEXED ARRAYS
$names = ["Gladys", "Josline", "Melvin", 10.5];
//Printing an array using for each loop
foreach ($names as $name){
    echo "<p>$name</p>";
}
echo "<hr>";

//printing array using while loop
$numberOfArrayItem = count($names);
$i = 0;
while ($i < $numberOfArrayItem){
    echo "<p>$names[$i]";
    $i++;
}
echo "<hr>";

//printing using for loop
for ($x = 0; $x<$numberOfArrayItem; $x++){
    echo "<p>$names[$x]</p>";
}
echo "<hr>";

//ASSOCIATIVE ARRAYS
$students = ["adm1"=>"Jesse", "adm2"=>"Joseph", "adm3"=>"Gladys"];
//sort in ascending order with respect to keys
//ksort($students);
//sort in descending order with respect to keys
//krsort($students);
//sort in ascending order with respect to values
//asort($students);
//sort in descending order with respect to keys
arsort($students);

foreach ($students as $key=> $value){
    echo "<p>$key------- $value </p>";
}
echo "<hr>";









