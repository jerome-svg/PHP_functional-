<?php

    // This is custom array_map function

    $number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $double = function($x){
        return $x * 2;
    };

    $double_number = array_map($double, $number);

    echo "<pre>";
    print_r($double_number);
    echo "</pre>";


?>