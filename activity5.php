<?php


    // $create_printer = function(){
    //     return function(){
    //             echo "Hellow this is example returning function";
    //     };
    // };

    // $my_printer = $create_printer();
    // $my_printer();




    $create_function_multiplier = function($y){
        return function($x) use ($y){
            return $x * $y;
        };
    };
        
     $double = $create_function_multiplier(2);
     $triple = $create_function_multiplier(3);
     $quadruple= $create_function_multiplier(4);
    



?>