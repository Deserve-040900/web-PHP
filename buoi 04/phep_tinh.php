<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Phép tính</title>
</head>
<body>
<div class="container">    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>CÁC PHÉP TÍNH</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Số thứ nhất</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                   
                    <input type="number" name="so_thu_nhat" id="" class="form-control" value="<?php if(isset($_POST['so_thu_nhat'])) echo $_POST['so_thu_nhat'] ?>" required="required">                    
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Số thứ hai</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                   
                    <input type="number" name="so_thu_hai" id="" class="form-control" value="<?php if(isset($_POST['so_thu_hai'])) echo $_POST['so_thu_hai'] ?>" required="required">
                </div>                
            </div>

            <div class="form-group">
                <input type="radio" name="pheptinh" id="cong" value=" + " <?php if(isset($_POST['pheptinh']==' + ') echo 'checked' ?>>Tổng

                <input type="radio" name="pheptinh" id="tru" value=" - " <?php if(isset($_POST['pheptinh'])==' - ') echo 'checked' ?>>Hiệu

                <input type="radio" name="pheptinh" id="nhan" value=" * " <?php if(isset($_POST['pheptinh'])==' * ') echo 'checked' ?>>Tích
                
                <input type="radio" name="pheptinh" id="chia" value=" / " <?php if(isset($_POST['pheptinh'])==' / ') echo 'checked' ?>>Thương
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tính</button>
                </div>
            </div>

            <div class="ketqua">
                <h3>HIỂN THỊ KẾT QUẢ</h3>
                <?php
                include('./phep_tinh-func.php');
                if(isset($_POST['so_thu_nhat']) && isset($_POST['so_thu_hai'])){
                    $tinh = new pheptinh($_POST['so_thu_nhat'], $_POST['so_thu_hai']);
                    $string = $tinh->num1() . $_POST['pheptinh'] . $tinh->num2() . " = ";

                    switch($_POST['pheptinh']){
                        case ' + ':
                            echo $string . $tinh->tong();   break;
                        case ' - ':
                            echo $string . $tinh->hieu();   break;
                        case ' * ':
                            echo $string . $tinh->tich();   break;
                        case ' / ':
                            if($_POST['so_thu_hai']!=0){
                                echo $string . $tinh->thuong();
                            }else{
                                echo "số thứ hai phải khác 0";
                            }
                        break;
                    }
                }
                ?>
            </div>
    </form>
    
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>