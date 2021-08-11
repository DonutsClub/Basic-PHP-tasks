<?php

/**
 * @param $checkNumber
 */

function isPalindrome($checkNumber)
{
    $binFlag = false;
    $hexFlag = false;
    $octFlag = false;
    $decFlag = false;

    $binNumber = decbin($checkNumber);
    $hexNumber = dechex($checkNumber);
    $octNumber = decoct($checkNumber);
    $outputNumber = $checkNumber;

    $binNumber = strval($binNumber);
    $binNumber = preg_replace('/[^0-9.]+/', '', $binNumber);
    $reverseNumber = strrev($binNumber);

    if ($reverseNumber == $binNumber)
    {
        $binFlag = true;
    }

    $hexNumber = strval($hexNumber);
    $hexNumber = preg_replace('/[^0-9.]+/', '', $hexNumber);
    $reverseNumber = strrev($hexNumber);

    if ($reverseNumber == $hexNumber)
    {
        $hexFlag = true;
    }

    $octNumber = strval($octNumber);
    $octNumber = preg_replace('/[^0-9.]+/', '', $octNumber);
    $reverseNumber = strrev($octNumber);

    if ($reverseNumber == $octNumber)
    {
        $octFlag = true;
    }

    $checkNumber = strval($checkNumber);
    $checkNumber = preg_replace('/[^0-9.]+/', '', $checkNumber);
    $reverseNumber = strrev($checkNumber);

    if ($reverseNumber == $checkNumber)
    {
        $decFlag = true;
    }

    if ($binFlag)
    {
        echo "\nNumber $outputNumber is a palindrome in binary notation (2)";
    }

    if ($octFlag)
    {
        echo "\nNumber $outputNumber is an octal palindrome (8)";
    }

    if ($decFlag)
    {
        echo "\nNumber $outputNumber is a palindrome in decimal notation (10)";
    }

    if ($hexFlag)
    {
        echo "\nNumber $outputNumber is a palindrome in hexadecimal notation (16)";
    }

    if ($decFlag == false and $binFlag == false and $octFlag == false and $hexFlag == false)
    {
        echo "\nNumber $outputNumber is not a palindrome in any notation";
    }
}

isPalindrome(20);