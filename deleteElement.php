<br>
<br>
<br>

<form method="post">
    Nhap phan tu can xoa <input type="number" name="num">
    <input type="submit" value="submit">
</form>

<?php

$arr = [1, 2, 3, 4, 10, 15, 18, 20];

print("<br>Mang truoc khi xoa: <pre>" . print_r($arr, true) . "</pre>");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //print("<pre>" . print_r($_SERVER, true) . "</pre>");
    if (isset($_POST['num'])) {
//        for ($i = 0; $i < count($arr); $i++) {
//            if ($arr[$i] == $_POST['num']) {
//                //unset($arr[$i]);
//                //$arr = array_values($arr);
//                //array_splice($arr, $i, 1);
//                $index_del = $i;
//            }
//        }
//
//        $new1_arr = array();
//        for ($i = 0; $i < $index_del; $i++) {
//            $new1_arr[$i] = $arr[$i];
//        }
//        print("<br>Mang sau khi da xoa phan tu 1: <pre>" . print_r($new1_arr, true) . "</pre>");
//
//        $new2_arr = array();
//        for ($i = $index_del + 1; $i < count($arr); $i++) {
//            $new2_arr[$i] = $arr[$i];
//        }
//
//
//        print("<br>Mang sau khi da xoa phan tu 2: <pre>" . print_r($new2_arr, true) . "</pre>");
        $new_arr = array();
        foreach ($arr as $key => $value) {
            if ($_POST['num'] != $value) {
                $new_arr[] = $value;
            }
        }
        print("<pre>" . print_r($new_arr, true) . "</pre>");

    }
}