<?php


    $divide = function($x, $y){

        if($y == 0){
            echo 'Tha number cant devide by zero';
            return null;
        }

        return $x / $y;
    };

    $second_arg_isnt_zero = function($func){
        return function(...$args){
            if($args[1] == 0){
                echo 'Tha number cant devide by zero';
                return null;
            }
            return $func(...$args);
        };
    };

    $devide_safe = $second_arg_isnt_zero($divide);


    echo $devide_safe(10, 2);

?>