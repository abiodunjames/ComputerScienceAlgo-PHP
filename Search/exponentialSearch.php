<?php

function exponentialSearch(array $array, int $element)
{
    $size = count($array);
    if ($size == 0) {
        return -1;
    }
    $bound = 1;
    while ($bound < $size && $array[$bound] < $element) {
        $bound *= 2;
    }
    return exponentialSearch($array, $element, intval($bound/2), min($bound, $size));
}

$array = [1, 2, 3, 4, 5, 6, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 18];
echo exponentialSearch($array,5);
