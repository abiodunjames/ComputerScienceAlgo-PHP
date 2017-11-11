<?php

function selectionSort(array $arr): array
{
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$min] > $arr[$j]) {
                $min = $j;
            }
        }
        if ($i != $min) {
            $tmp = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }
    return $arr;
}

function lineSort($array){
$bigger_array = [];
foreach ($array as $key => $value) {
    $bigger_array[] = explode(',', $value);
}
//print_r($bigger_array);
$len = count($bigger_array);
for ($i = 0; $i < $len; $i++) {
    $min = $i;
    for ($j = $i + 1; $j < $len; $j++) {
        if ($bigger_array[$j][1] < $bigger_array[$min][1]) {
            $min = $j;
        }
    }
    if ($min != $i) {
        $tmp = $bigger_array[$min];
        $bigger_array[$min] = $bigger_array[$i];
        $bigger_array[$i]=$tmp;
   }
}
foreach ($bigger_array as $array){
    echo implode(',',$array) ."\n";
}
}
$array= array ("Jervie,12,M","Jaimy,11,F","Tony,23,M", "Janey,11,F");

lineSort($array);
