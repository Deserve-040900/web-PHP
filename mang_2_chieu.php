<?php
$mang_2_chieu = array(array(1,2,array(4,5,6)),array(7,8,9));
$mang_2_chieu_type_2 = [[1,2,[4,5,6]],[7,8,9]];
echo "<pre>",print_r($mang_2_chieu),"</pre>";
echo "<pre>",print_r($mang_2_chieu_type_2),"</pre>";

$a = [4,6,1,3,8,2,5,7,9];

foreach($a as $item){
    echo "$item\n";
}
echo "<pre>",print_r($a),"</pre>";

function hoan_vi(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}
hoan_vi($a[0],$a[1]);
echo "<pre>",print_r($a),"</pre>";

// sắp xếp tăng dần
for($i=0; $i<count($a); $i++){
    for($j=$i+1; $j<count($a); $j++){
        if($a[$i] > $a[$j]){
            hoan_vi($a[$i],$a[$j]);
        }
    }
}

sort($a);
echo "<pre>",print_r($a),"</pre>";

function cmp($a, $b){
    if($a==$b){
        return 0;
    }
    else{
        return ($a<$b) ? -1 : 1;
    }
}
usort($a, "cmp");
echo "<pre>",print_r($a),"</pre>";

foreach($a as $key => $value){
    echo "$key : $value<br>";
}
?>