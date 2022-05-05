<?php


    // This is custom  array map function with merging 2 arrays letters and numbers


    $letter = ['a', 'b', 'c', 'd', 'e'];
    $number = [1, 2, 3, 4, 5];



        $pairs = array_map(
            fn($letter, $number) => $letter . $number,
            $letter,
            $number
        );


    echo "<pre>";
    print_r($pairs);
    echo "</pre>";


?>