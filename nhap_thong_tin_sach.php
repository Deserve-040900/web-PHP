<?php
include('./luu_thong_tin_sach.php');

echo "<pre>",print_r($_POST),"</pre>";
echo "<pre>",print_r($_FILES),"</pre>";

if($_FILES['hinh']){
    $thong_tin_hinh = './image/' . $_FILES['hinh']['name'];
    move_uploaded_file($_FILES['hinh']['tmp_name'], $thong_tin_hinh);
}

if(isset($_POST['ma_sach']) && isset($_POST['ten_sach']) && isset($_POST['don_gia']) && isset($_POST['tac_gia']) && $thong_tin_hinh){
    $book = new sach($_POST['ma_sach'], $_POST['ten_sach'], $_POST['don_gia'], $_POST['tac_gia'], $thong_tin_hinh);
    $book->luu_sach();
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
<title>nhập và lưu data sách</title>
</head>
<body>
<div class="container">    
    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <legend>SAVE AND OPEN DATA OF BOOK</legend>
            </div>

            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Mã sách</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="ma_sach" id="input" class="form-control">                    
                </div>               
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tên sách</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="ten_sach" id="input" class="form-control">                    
                </div>               
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Đơn giá</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="don_gia" id="input" class="form-control">                    
                </div>               
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tác giả</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="tac_gia" id="input" class="form-control">                    
                </div>               
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Hình</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="file" name="hinh" id="file" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
    </form>
    <script>
    $(function(){
        $('#hinh').change(function(){
            var input = this;
            var url = $(this).val();

            console.log(input.files);

            for(var i=0; i<input.files.length; i++){
                var reader = new FileReader();
                reader.onload = function(e){
                    console.log(e.target);
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    $('.list_img').append(img);
                }
                reader.readAsDataURL(input.files[i]);
            }
        });
    });
    </script>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>