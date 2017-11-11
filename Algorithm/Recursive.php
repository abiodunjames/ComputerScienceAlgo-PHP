<?php

function factorial(int $n): int
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

//F(n-1) + F(n-2) +
function Fibonaci($f)
{
    if ($f == 0) {
        return 1;
    } elseif ($f == 1) {
        return 1;
    } else {
        return Fibonaci($f - 1) + Fibonaci($f - 2);
    }
}

function gcd(int $a, int $b): int
{
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

$list =[
    ['id'=>1,'categoryName'=>"First", 'parentCategory'=>0,'sortInd'=>0],
    ['id'=>2,'categoryName'=>"Second", 'parentCategory'=>1,'sortInd'=>0],
    ['id'=>3,'categoryName'=>"Third", 'parentCategory'=>1,'sortInd'=>1],
    ['id'=>4,'categoryName'=>"Fourth", 'parentCategory'=>3,'sortInd'=>0],
    ['id'=>5,'categoryName'=>"Fifth", 'parentCategory'=>4,'sortInd'=>0],
    ['id'=>6,'categoryName'=>"Sixth", 'parentCategory'=>5,'sortInd'=>0],
    ['id'=>7,'categoryName'=>"Seven", 'parentCategory'=>6,'sortInd'=>0],
    ['id'=>8,'categoryName'=>"Eight", 'parentCategory'=>7,'sortInd'=>0],
    ['id'=>9,'categoryName'=>"Ninth", 'parentCategory'=>1,'sortInd'=>0],
    ['id'=>10,'categoryName'=>"Tenth", 'parentCategory'=>2,'sortInd'=>1],
];
$cats=[];
foreach ($list as $l){
    $cats[$l['parentCategory']][]=$l;
}
function findTree($categories,$n) {
    if (!isset($categories[$n])) {
        return null;
    }
foreach ($categories[$n] as $category) {

    echo str_repeat('---',$n)."".$category['categoryName']."\n";
    findTree($categories,$category['id']);

}
}
//findTree($cats,0);



function showFileInDir($path, $allFiles=[]){
    $files =scandir($path);
    foreach ($files as $key=>$value){
        $file_path =realpath($path.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($file_path)){
            $allFiles[] =$file_path;
        }
        elseif($value!="." && $value!=".."){
            showFileInDir($value,$allFiles);
        }
    }
    return $allFiles;
}
//$files = new RecursiveIteratorIterator(new DirectoryIterator($path),RecursiveIteratorIterator::SELF_FIRST);
function array_sum_recursive(Array $array){
    $sum ="";
    array_walk_recursive($array, function ($v) use (&$sum){
        $sum .=$v;
    });
    return $sum;
}
$arr = [1, 2, 3, 4, 5, [6, 7, [8, 9, 10, [11, 12, 13, [14, 15, 16]]]]];
echo array_sum_recursive($arr);
