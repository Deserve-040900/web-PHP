<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>In nội dung và chuyển màu background</title>
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>content & Background</legend>
                </div>

                <div class="form-group">                   
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nội dung</div>                    
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="text" name="noidung" id="" class="form-control" value="<?php if(isset($_POST["noidung"])) echo $_POST["noidung"] ?>" required="required">                        
                    </div>                    
                </div>

                <div class="form-group">                   
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Màu nền 1</div>                    
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="text" name="maunen1" id="" class="form-control" value="<?php if(isset($_POST["maunen1"])) echo $_POST["maunen1"] ?>" required="required">                        
                    </div>                    
                </div>

                <div class="form-group">                   
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Màu nền 2</div>                    
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="text" name="maunen2" id="" class="form-control" value="<?php if(isset($_POST["maunen2"])) echo $_POST["maunen2"] ?>" required="required">                        
                    </div>                    
                </div>

                <div class="form-group">                   
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Màu chữ</div>                    
                    
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                        
                        <input type="text" name="mauchu" id="" class="form-control" value="<?php if(isset($_POST["mauchu"])) echo $_POST["mauchu"] ?>" required="required">                        
                    </div>                    
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                
                <!--display:flex; margin:auto dùng để canh giữa cho content-->
                <div style="display: flex; text-align: center; height: 500px; background: linear-gradient(180deg, #<?php echo $_POST["maunen1"] ?>, #<?php echo $_POST["maunen2"] ?>); color: #<?php echo $_POST["mauchu"] ?>">
                    <div style="margin:auto;">
                        <?php 
                            echo $_POST['noidung']; 
                        ?>
                    </div>
                </div>
                <!--check dữ liệu nhập vào nếu có dấu # thì loại bỏ #-->
        </form>        
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>