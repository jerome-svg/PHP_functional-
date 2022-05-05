<?php

    // This is the function like the looping 


    function count_down1($x){

        if($x < 0){
            echo "Blast off!";

            return;
        }

        echo $x;
        echo "<br>";

        count_down1($x  - 1);
        
    };

    count_down1(10);



    echo "<br>";
    echo "<br>";
    echo "<br>";



    function count_down2($x, $max){

        if($x > $max){
            echo "Don counting!";

            return;
        }

        echo $x;
        echo "<br>";

        count_down2($x  + 1, $max);
        
    };

    count_down2(1, 10);


?>
