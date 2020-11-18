<?php
$ho = '';
$dem = '';
$ten = '';

if(isset($_POST["ho_ten"])){
    $mang_ten = explode(' ',$_POST["ho_ten"]);
    $ho = $mang_ten[0];
    $ten = $mang_ten[count($mang_ten)-1];
    //$mang_ten[0] = " ";
    array_pop($mang_ten);
    unset($mang_ten[0]);
    $dem = implode(' ',$mang_ten);
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
<title>Tách họ và tên</title>
</head>
<body>
<div class="container">    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÁCH HỌ VÀ TÊN</legend>
            </div>
            
            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nhập họ và tên</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="ho_ten" id="" class="form-control" value="" required="required">
                </div>                
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tách rời</button>
                </div>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Họ</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="ho" id="" class="form-control" value="<?php echo $ho ?>">
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tên đệm</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="dem" id="" class="form-control" value="<?php echo $dem ?>">
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tên</div>                
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="text" name="ten" id="" class="form-control" value="<?php echo $ten ?>">
                </div>                
            </div>
    </form>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>