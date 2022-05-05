<?php


// This is the normal array sort
// $cars=array(1, 10, 13, 35, 12, 26, 2, 8);
// sort($cars);

// $clength=count($cars);
// for($x=0;$x<$clength;$x++)
//   {
//   echo $cars[$x];
//   echo "<br>";
//   }



$numbers = [20, 5, 8, 6, 3, 2, 11];


function array_sort($array, ...$rest){
    sort($array, ...$rest);

    return $array;
}


$number_sorted = array_sort($numbers);

echo "Here is the number before sorting";
echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "<br>";


echo "Here is the sorted data";
echo "<pre>";
print_r($number_sorted);
echo "</pre>";



?>