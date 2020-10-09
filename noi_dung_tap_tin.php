<?php
if(isset($_POST['ten_file']) && isset($_POST['noi_dung'])){
    $f = fopen('text.txt','w+') or exit('không thể mở file');
    $noi_dung = $_POST['noi_dung'];
    fwrite($f,$noi_dung);
    fclose($f);
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
<title>mở-đọc-ghi nội dung tập tin</title>
</head>
<body>
<div class="container">    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TẠO-GHI VÀ ĐỌC NỘI DUNG TẬP TIN</legend>
            </div>

            <div class="form-group">                
                <div class="col-sm-2">Tên tập tin</div>
                
                <div class="col-sm-10">                    
                    <input type="text" name="ten_file" id="input">                    
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-sm-2">Nội dung tập tin</div>
                
                <div class="col-sm-10">
                    <textarea name="noi_dung" id="input"cols="30" rows="5"></textarea>           
                </div>                
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Print</button>
                </div>
            </div>
    </form>
    <div class="in_noi_dung">
        <?php
        // file_exists kiểm tra tập tin tồn tại
            if(file_exists('text.txt')){
                $f = fopen('text.txt','r') or exit('không thể mở tập tin');

                while(!feof($f)){
                    echo fgets($f) . "<br>";
                }
                fclose($f);
            }
        ?>
    </div>    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>