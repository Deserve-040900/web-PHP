<?php
if(isset($_POST["so_cu"]) && isset($_POST["so_moi"]) && isset($_POST["gia"])){
    $chi_so = $_POST["so_moi"] - $_POST["so_cu"];
    $thanh_toan = $chi_so * $_POST["gia"];
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
<title>Thanh toán tiền điện</title>
</head>
<body>
<div class="container">
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>THANH TOÁN TIỀN ĐIỆN</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Chủ hộ</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="chủ hộ" id="" class="form-control" value="<?php if(isset($_POST["chuho"])) echo $_POST["chuho"] ?>" required="required">
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Chỉ số cũ</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="chỉ số cũ" id="" class="form-control" value="<?php if(isset($_POST["so_cu"])) echo $_POST["so_cu"] ?>" required="required">(KW)
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Chỉ số mới</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="chỉ số mới" id="" class="form-control" value="<?php if(isset($_POST["so_moi"])) echo $_POST["so_moi"] ?>" required="required">(KW)
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Đơn giá</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="đơn giá" id="" class="form-control" value="<?php if(isset($_POST["gia"])) echo $_POST["gia"] ?>" required="required">(VNĐ)
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Số tiền thanh toán</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="thanh toán" id="" class="form-control" value="<?php echo $thanh_toan ?>">(VNĐ)
                </div>                
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tính tiền</button>
                </div>
            </div>
    </form>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>