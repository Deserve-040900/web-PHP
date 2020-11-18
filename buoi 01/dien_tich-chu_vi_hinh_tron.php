<?php
if(isset($_POST["ban_kinh"])){
    //print_r($_POST);
    //$hang_so = 3.14;
    $chu_vi = 2*$_POST["ban_kinh"]*3.14;
    $dien_tich = $_POST["ban_kinh"]*$_POST["ban_kinh"]*3.14;
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
<title>Diện tích và chu vi hình tròn</title>
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</legend>
                </div>

                <div class="form-group">                    
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Bán kính</div>
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="number" name="ban_kinh" id="" class="form-control" value="<?php if(isset($_POST["ban_kinh"])) echo $_POST["ban_kinh"] ?>" required="required">
                    </div>                                        
                </div>

                <div class="form-group">                    
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Chu vi</div>
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="number" name="chu vi" id="" class="form-control" value="<?php echo $chu_vi ?>">
                    </div>                                        
                </div>

                <div class="form-group">                    
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Diện tích</div>
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="number" name="diện tích" id="" class="form-control" value="<?php echo $dien_tich ?>">
                    </div>                                        
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Xem kết quả</button>
                    </div>
                </div>
        </form>
        
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>