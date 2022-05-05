<?php


     // This is the fisrt sample of stacture of function PHP



    function my_function(){
        echo "Sample 1</br>";
        // this is normal function 
    };


    $my_function = function($name){
        echo "Here is you name: $name";
    };


    $my_function2 = $my_function;

    $my_function2('Jerome');






?>