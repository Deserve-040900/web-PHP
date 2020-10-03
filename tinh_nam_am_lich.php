<?php
$nam = '';
$mang_can = ['Canh','Tân'];
$mang_chi = ['Thân ','Dậu','Tuất','Hợi','Tý','Sửu','Dần','Mẹo','Thìn','Tỵ','Ngọ','Mùi'];
if(isset($_POST["nam_sinh"])){
    $can = $_POST["nam_sinh"] % 10;
    $chi = $_POST["nam_sinh"] % 12;
    $nam = $mang_can[$can] . " " . $mang_chi[$chi];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>tính năm âm lịch</title>
</head>
<body>
<style>

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>