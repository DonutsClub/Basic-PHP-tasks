<?php

$test_array = array(1,2);

$number = readline("Write your number here:");

while (count($test_array) != $number)
{
    array_push($test_array, count($test_array) + 1);
}

print_r($test_array);