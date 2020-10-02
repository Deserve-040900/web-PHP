<?php
    if(isset($_POST["chieu_dai"]) && isset($_POST["chieu_rong"])){
        //print_r($_POST);
        $dien_tich = $_POST["chieu_dai"] * $_POST["chieu_rong"];
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
<title>Tính Diện Tích</title>
</head>
<body>
    
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT</legend>
            </div>
            
            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Chiều Dài</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">      
                    <input type="number" name="chieu dai" class="form-control" id="" value="<?php if(isset($_POST["chieu_dai"])) echo $_POST["chieu_dai"] ?>" placeholder="nhập chiều dài" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Chiều Rộng</div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="chieu rong" class="form-control" id="" value="<?php if(isset($_POST["chieu_rong"])) echo $_POST["chieu_rong"] ?>" placeholder="nhập chiều rộng" required="required">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Diện Tích</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="number" name="dien tich" class="form-control" id="" value="<?php echo $dien_tich ?>" placeholder="diện tích ...">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Kết quả</button>
                </div>
            </div>            
        </form>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>