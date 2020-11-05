<!---->
<!--<form method="post">-->
<!--    Nhap phan tu 1 cua mang <input type="number" name="nhapmang"><br>-->
<!--    Nhap phan tu 2 cua mang <input type="number" name="nhapmang1"><br>-->
<!--    Nhap phan tu 3 cua mang <input type="number" name="nhapmang2"><br>-->
<!--    Nhap phan tu 4 cua mang <input type="number" name="nhapmang3"><br>-->
<!--    Nhap phan tu 5 cua mang <input type="number" name="nhapmang4"><br>-->
<!--    <input type="submit" name="btn" value="Submit">-->
<!--</form>-->
<!---->
<!---->
<?php
//
//
//
//if (isset($_POST['btn'])) {
//
//    $arr1 = array();
//    $i = 0;
//    foreach ($_POST as $k => $v){
//        if (is_numeric($v)) {
//            $arr1[$i] = $v;
//        }
//        $i++;
//    }
//    var_dump($arr1);
//
//}

$arr1 = [1, 5, 10, 15, 20, 44, 33];
$arr2 = [2, 3, 4, 2, 2, 3, 4, 34, 2];
$arr = [];
for ($i = 0; $i < count($arr1); $i++) {
    $arr[$i] = $arr1[$i];
}
echo count($arr1)."<br>";
echo count($arr2)."<br>";
echo count($arr)."<br>";

$length_arr = count($arr);

for ($i = 0; $i < count($arr2); $i++) {
    $arr[$i + $length_arr] = $arr2[$i];
}

print("<pre>".print_r($arr,true)."</pre>");
