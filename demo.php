<?php
$chuoi = "lạ lùng em tới đây bên anh";
$chuoi_tim = "lạ lùng";
//$chuoi_thay = "kỳ diệu";

//echo str_replace($chuoi_tim, $chuoi_thay, $chuoi);
//echo 'vị trí từ trái sang phải : ' . strpos($chuoi, $chuoi_tim) . '<br>';
//echo false;
//echo 'vị trí cuối cùng : ' . strripos($chuoi, $chuoi_tim);

$mang_chuoi = explode(" ",$chuoi);
echo "<pre>",print_r($mang_chuoi),"</pre>";

$a = [1,2,3,4,5];
foreach($a as $item){
    echo $item . "<br>";
}

?>