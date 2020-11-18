<?php
$f = fopen('text.txt','a+') or exit ("ko thể mở file");

// đọc file
while(!feof($f)){
    echo fgets($f) . "<br>";
}
echo str_replace(" ",'<br>',"text.txt")//PHP_EOL 
$chuoi = readfile('text.txt');

// ghi file
$noi_dung = 'thử ghi file lại xem sao';
fwrite($f, $noi_dung);
fclose($f);

// xử lý chuỗi nâng cao thông qua biểu thức
// Regular Expression (RegEx)
$chuoi_file = 'ads15654adkfjaf324aiohdsf8789asdf';
preg_match_all('/([0-9]+)/i',$chuoi_file,$matches);
echo "<pre>",print_r($matches),"</pre>"
?>