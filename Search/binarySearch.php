<?php
function binarySearch($array, $needle, $lowIndex, $highIndex)
{
    if ($highIndex < $lowIndex) {
        return FALSE;
    }
    $mid = (int)($lowIndex + $highIndex) / 2;
    if ($array[$mid] > $needle) {
        $highIndex = $mid - 1;
        return binarySearch($array, $needle,$lowIndex, $highIndex);
    } elseif ($array[$mid] < $needle) {
        $lowIndex = $mid + 1;
        return binarySearch($array, $needle,$lowIndex, $highIndex);
    } elseif ($array[$mid] == $needle) {
        return TRUE;
    }else{
        return FALSE;
    }
}

$numbers = range(1, 200, 5);
$number = 31;
echo $number;
if (binarySearch($numbers, $number,0, count($numbers)-1) !== FALSE) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}
$number = 500;
if (binarySearch($numbers, $number,0, count($numbers)-1) !== FALSE) {
    echo "$number Found \n";
} else {
    echo "$number Not found \n";
}

function firstOccurrenceOfElement($array, $needle){
    $highIndex =count($array)-1;
    $firstOccurrence=-1;
    $lowIndex =0;
    while($lowIndex<=$highIndex){
        $mid =(int)($lowIndex+$highIndex)/2;
        if($array[$mid]>$needle){
            $highIndex =$mid-1;
        }
        elseif($array[$mid]<$needle){
            $lowIndex =$mid+1;
        }
        elseif ($array[$mid]===$needle){
            $firstOccurrence=$mid;
            $highIndex =$mid-1;
        }
    }
    return $firstOccurrence;
}

$numbers = [1, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 5, 5];
$number = 2;
$pos = firstOccurrenceOfElement($numbers, $number);
if ($pos >= 0) {
    echo "$number Found at position $pos \n";
} else {
    echo "$number Not found \n";
}
$number = 5;
$pos = firstOccurrenceOfElement($numbers, $number);
if ($pos >= 0) {
    echo "$number Found at position $pos \n";
} else {
    echo "$number Not found \n";

}
