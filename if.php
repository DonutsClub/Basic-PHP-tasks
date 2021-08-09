<?php

function odd_even($number)
{
if ($number % 2 == 0)
{
    return "number $number is even";
}
else
{
    return "number $number is odd";
}
}

$num = readline("Enter your number: ");

echo odd_even($num);
