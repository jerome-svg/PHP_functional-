<?php


// This is sample merging two Arrays

$name_1 = [
    'Jerome',
    'Jasper',
    'BonBon'
];

$name_2 = [
    'Rayan',
    'Jhon Doe',
    'Ian'
];

$all_name = [
    'Jeny',
    ...$name_1,
    'Bill',
    ...$name_2,
    'James'
];

print_r($all_name);





?>