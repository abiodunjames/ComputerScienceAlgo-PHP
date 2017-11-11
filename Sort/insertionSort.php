<?php

function insertionSort(&$Array)
{
    //45, 20, 93, 67, 10, 97, 52, 88, 33, 92.
$len =count($Array);
for ($i=1; $i<$len;$i++){
    $j=$i-1;
    $element =$Array[$i];
    while($j>=1 && $Array[$j]>$element){
        $Array[$j+1] =$Array[$j];
        $j--;
    }
    $Array[$j+1] =$element;
}
return $Array;
}

$array=[20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
print_r(insertionSort($array));
