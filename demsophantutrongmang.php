<?php

$str = "abcdefghijklmnopqxyzadefksad, qwerqwe,nbrqwe";
$arr = str_split($str);
$char = "a";

$count = 0;
for ($i = 0; $i< count($arr); $i++){
    if ($arr[$i] == $char){
        $count++;
    }

}

echo "So lan xuat hien cua $char la: " . $count;