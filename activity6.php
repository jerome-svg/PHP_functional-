


<?php

// This is example function closure

    $create_printer = function(){
        $my_favorite_number = 42;


        return function() use ($my_favorite_number){
            echo "This is my favorite Number: " .  $my_favorite_number;
        };
    };


    $favorite_number = $create_printer();
    $favorite_number();

?>