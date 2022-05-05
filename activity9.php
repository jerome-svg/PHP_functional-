<?php


// This is custom in Array merge function

$person_data = [
    'name' => 'Jerome',
    'Age' => 25,
    'gender' => 'Male'
];

$career_data = [
    'Job' => 'Developer',
    'Salary' => 1200
];



$person_with_career_data = array_merge(
    $person_data,
    $career_data
);


print_r($person_with_career_data);

?>