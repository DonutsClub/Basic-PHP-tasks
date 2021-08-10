<?php

function isReverse($string)
{
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

echo (isReverse("hello"));