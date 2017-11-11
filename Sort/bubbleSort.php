<?php
function bubbleSort(array $array)
{
    $len = count($array);
    $bound =$len-1;
    for ($i = 0; $i < $len; $i++) {

        $swap =false;
        $newBound=0;
        for ($j = 0; $j < $bound; $j++) {
            if($array[$j]<$array[$j+1]){
                $temp =$array[$j];
                $array[$j] =$array[$j+1];
                $array[$j+1]=$temp;
                $swap=true;
                $newBound =$j;
            }
        }
        $bound=$newBound;
        if(!$swap){ break;}
    }
    return $array;
}

$array=[1,34,5858,90,39,100];
print_r(bubbleSort($array));
