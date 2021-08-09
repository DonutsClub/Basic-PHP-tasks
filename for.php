<?php

function ArrayNumbers($count)
{
    $mass = array();

    for ($i = 1; $i <= $count; $i++)
    {
        array_push($mass, $i);
    }

    return $mass;
}

print_r(ArrayNumbers(readline("Enter your number: ")));