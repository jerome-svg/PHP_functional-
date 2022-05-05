<h1>Data part 2</h1>
<br>
<form action="activity4.php" method="post">
    <select name="type">
        <option value="Mul">Multiplication from 2</option>
        <option value="Sub">Subtract from 2</option>
        <option value="add">Add from 3</option>
    </select>
    <br>
    <br>
    <label for="#">Type number: </label>
    <input type="number" placeholder="EX: 1" name="number1"><br><br>
    <input type="submit" name="get_data"><br><br>
</from>
<h1>See Output:</h1>


<?php

// This is the fanction as data part 2

if(isset($_POST['get_data'])){



    $numdata = $_POST['number1'];
    $type = $_POST['type'];

    $double = function($x){
        return $x * 2;
    };


    $subtract_one = function($x){
        return $x - 2;
    };


    $add_three = function($x){
        return $x + 3;
    };

    if($type == 'Mul'){
        $total =  $double($numdata);
    }
    elseif($type == 'Sub'){
        $total = $subtract_one($numdata);
    }
    elseif($type == 'add'){
        $total = $add_three($numdata);
    }

    echo $total;


}


?>