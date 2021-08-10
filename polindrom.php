<?php

function isReverse($string)
{
    $check = strrev($string);
    $check = str_replace(" ", "", $check);
    $string = str_replace(" ", "", $string);
    $check = strtolower($check);
    $string = strtolower($string);
    if ($string == $check)
    {
        return "Yes";
    }
    else
    {
        return "No";
    }
}

echo (isReverse("Race car"));