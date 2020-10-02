<?php
$tong_day = 0;
$tich_day = 1;
$tong_le = 0;
$tong_chan = 0;
if(isset($_POST["so_bd"]) && isset($_POST["so_kt"])){
    for($i = $_POST["so_bd"];$i < $_POST["so_kt"]; $i++){
        $tong_day += $i;
        $tich_day *= $i;
        if($i % 2 == 0){
            $tong_chan += $i;
        }else{
            $tong_le += $i;
        }
    }
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
<title>Tính toán trên dãy số</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>TÍNH TOÁN TRÊN DÃY SỐ</legend>
                </div>

                <div class="form-group" style="display:block;">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Số bắt đầu: </div>              
                    <div class="col-xs-4">
                        <input type="text" name="so_bd" id="" class="form-control" value="<?php if(isset($_POST["so_bd"])) echo $_POST["so_bd"] ?>" required="required">   
                    </div>

                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Số kết thúc: </div>              
                    <div class="col-xs-4">
                        <input type="text" name="so_kt" id="" class="form-control" value="<?php if(isset($_POST["so_kt"])) echo $_POST["so_kt"] ?>" required="required">   
                    </div>
                </div>

                <div class="form-group">                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="col-xs-12">Tổng dãy số</div>
                        
                        <div class="col-xs-12">
                            <input type="number" name="tong day" class="form-control" id="" value="<?php echo $tong_day ?>">
                        </div>
                    </div>                    
                </div>

                <div class="form-group">                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="col-xs-12">Tích dãy số</div>
                        
                        <div class="col-xs-12">
                            <input type="number" name="tich day" class="form-control" id="" value="<?php echo $tich_day ?>">
                        </div>
                    </div>                    
                </div>

                <div class="form-group">                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="col-xs-12">Tổng số chẵn</div>
                        
                        <div class="col-xs-12">
                            <input type="number" name="tong chan" class="form-control" id="" value="<?php echo $tong_chan ?>">
                        </div>
                    </div>                    
                </div>

                <div class="form-group">                    
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="col-xs-12">Tổng số lẻ</div>
                        
                        <div class="col-xs-12">
                            <input type="number" name="tong le" class="form-control" id="" value="<?php echo $tong_le ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">In kết quả</button>
                    </div>
                </div>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>