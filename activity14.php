<?php

    // This is partial application function

    $add = fn($x, $y, $z) => $x + $y + $z;

    

    $add_partial = fn($x) => fn($y, $z) => $add($x, $y, $z);


    $add_2 = $add_partial(2);

    $sum = $add_2(6, 7);


    echo $sum;


?>