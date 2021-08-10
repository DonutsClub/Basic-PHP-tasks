<?php

function isReverse($string)
{

    $check = strrev($string);
    $check = str_replace(" ", "", $check);
    $string = str_replace(" ", "", $string);
    $check = strtolower($check);
    $string = strtolower($string);
    $string = preg_replace("/[^a-z]+/", "", $string);
    $check = preg_replace("/[^a-z]+/", "", $check);

    if ($string == $check)
    {
        return "Yes";
    }
    else
    {
        return "No";
    }
}

echo (isReverse("Madam, in Eden, I’m Adam."));