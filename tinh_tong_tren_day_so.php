<?php
$tong = 0;
if(isset($_POST["day_so"])){
    $mang_so = explode(",", $_POST["day_so"]);

    for($i=0; $i<count($mang_so); $i++){
        if(is_numeric($mang_so[$i])){
            $tong += $mang_so[$i];
        }
    }
    // $tong = array_sum($mang_so);
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
<title>tính tổng trên mảng số</title>
</head>
<body>
<div class="container">    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÍNH TỔNG TRÊN MẢNG SỐ</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nhập dãy số</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="day so" id="" class="form-control" value="" required="required">
                </div>               
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Kết quả</button>
                </div>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tổng dãy số</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="tong" id="" class="form-control" value="<?php echo $tong ?>">
                </div>               
            </div>
    </form>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>