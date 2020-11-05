<?php

$arr = [[1, 2, -10],
        [1, 3, 44]];


$sum = 0;
$cot = 2;
for ($i = 1; $i < $cot; $i++) {
    for ($j = 0; $j < count($arr); $j++) {
        //echo $arr[$j][$i]."<br>";
        $sum += $arr[$j][$i];
    }
}

echo $sum;

//print("<pre>" . print_r($arr, true) . "</pre>");



