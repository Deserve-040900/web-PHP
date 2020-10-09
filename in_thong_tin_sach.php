<?php
include('./luu_thong_tin_sach.php');
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
<title>in thông tin sách</title>
</head>
<body>
<div class="container">    
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>MÃ SÁCH</th>
                <th>TÊN SÁCH</th>
                <th>ĐƠN GIÁ</th>
                <th>TÁC GIẢ</th>
                <th>HÌNH</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(file_exists('data_sach.txt')){
                    $f = fopen('data_sach.txt','a+') or exit('không thể mở tập tin');
                    while(!feof($f)){
                        $data = fgets($f);
                        if($data){
                            $thong_tin_sach = new sach();
                            $thong_tin_sach->chuyen_thanh_data($data);
                            $thong_tin_sach->in_sach();
                        }
                    }
                }
            ?>
        </tbody>
    </table>    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>