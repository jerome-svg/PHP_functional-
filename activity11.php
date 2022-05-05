<?php



// This is code for creating custom array_fiter function
$number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


// $even_numbers = [];

// for($i = 0; $i < count($number); $i += 1){
//     if($number[$i] % 2 == 0){
//         $even_numbers[] = $numbers[$i];
//     }
// }


$is_even = function($x){
    return $x % 2 == 0;
};


$even_numbers = array_values(array_filter($number, $is_even));

echo  "<pre>";
print_r($even_numbers);
echo "</pre>";

?>