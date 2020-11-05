
<form method="post">
    Nhap phan tu 1 cua mang <input type="number" name="nhapmang"><br>
    Nhap phan tu 2 cua mang <input type="number" name="nhapmang1"><br>
    Nhap phan tu 3 cua mang <input type="number" name="nhapmang2"><br>
    Nhap phan tu 4 cua mang <input type="number" name="nhapmang3"><br>
    Nhap phan tu 5 cua mang <input type="number" name="nhapmang4"><br>
    <input type="submit" name="btn" value="Submit">
</form>


<?php



if (isset($_POST['btn'])) {

    $arr1 = array();
    $i = 0;
    foreach ($_POST as $k => $v){
        if (is_numeric($v)) {
            $arr1[$i] = $v;
        }
        $i++;
    }
    var_dump($arr1);

}
