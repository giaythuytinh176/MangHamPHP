<?php

$arr = [[3, 4, 2],
    [1, 2, 2],
    [-1, -5, 1]];


$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($i == $j) {
            $sum += $arr[$i][$j];
        }
    }
}

echo "Duong cheo chinh: " . $sum . "<br>";

$sum1 = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($i + $j == count($arr) - 1) {
            $sum1 += $arr[$i][$j];
        }
    }
}

echo "Duong cheo phu: " . $sum1;

//print("<pre>" . print_r($arr, true) . "</pre>");
