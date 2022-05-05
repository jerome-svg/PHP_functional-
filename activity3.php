<h1>Adding fanction</h1>
<br>
<form action="activity3.php" method="post">
    <select name="type">
        <option value="Adding">Adding</option>
        <option value="Subtract">Subtract</option>
    </select>
    <br>
    <br>
    <label for="#">Type number: </label>
    <input type="number" placeholder="EX: 1" name="number1"><br><br>
    <label for="#">Type number: </label>
    <input type="number" placeholder="EX: 2" name="number2"><br><br>
    <input type="submit" name="get_data"><br><br>
</from>
<h1>See Output:</h1>






<?php

// This is the 3rd sample of stacture of function PHP adding 2 values. This is passing function as arguments. This is the function as data part

if(isset($_POST['get_data'])){

    $date1 = $_POST['type'];


    $add = function($x, $y){
        return $x + $y;
    };
    $suntrac = function($x, $y){
        return $x - $y;
    };

    $combine_2numbers = function($numbers){

        
        $date2 = $_POST['number1'];
        $date3 = $_POST['number2'];
        if(isset($date2) || isset($date3)){
            echo "Please Input Number";
        }
        else{
            $data2 = 1;
        }

        if(empty($date2) || empty($date3)){
            echo "Please Input data";
        }
        else{
            $data3 = 1;
        }


        $date2 = $_POST['number1'];
        $date3 = $_POST['number2'];
        return $numbers($date2, $date3);
    };

    if($date1 == 'Adding'){
        echo "<h2 style='color: red;'>This is the output: " . $combine_2numbers($add) . "</h2>";
    }
    elseif($date1 == 'Subtract'){
        echo "<h2 style='color: red;'>This is the output: " . $combine_2numbers($suntrac) . "</h2>";
    }



}


?>