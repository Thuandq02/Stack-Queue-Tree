<?php
include_once "ReadingList.php";

$stack = new ReadingList();

$number = 71;


while (($results = $number / 2) && $results > 1) {
    $remainder = $number % 2;
    $number = $results;
    $stack->push($remainder);
    if ($results > 0 && $results < 2)
    {
        $stack->push(1);
        break;
    }
}



print("<pre>" . print_r($stack, true) . "</pre>");


echo implode(", ", $stack->getStack());