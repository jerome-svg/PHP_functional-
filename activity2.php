<?php




    //================================================================
    // This is the second sample of stacture of function PHP
    echo "</br>";


    $enviroment = 'Dev';
    // This variable is for verification the data

    $fech_data_real = function(){
        echo "Fetching data..";
    };

    $fech_data_real = function(){
        echo "Fetching data..";
    };

    $fech_data_feke = function(){
        
        return [
            'name' => 'Jerome',
            'Age' => 25,
            'gender' => "Male"

        ];

    };


    $fetch_data = ($enviroment == "Sample" ? $fech_data_feke: $fech_data_real );

    print_r($fetch_data());

?>