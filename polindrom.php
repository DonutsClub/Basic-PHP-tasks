<?php

function isReverse($string)
{

    $string = strtolower($string);
    $string = preg_replace("/[^a-z]+/", "", $string);
    $check = strrev($string);

    if ($string == $check)
    {
        return "Yes";
    }
    else
    {
        return "No";
    }
}

echo (isReverse("A nut fora jar of tuna."));