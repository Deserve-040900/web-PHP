<?php
$nam_nhuan = 0;
$ngay_trong_thang = 0;
$ngay_trong_tuan = '';
$mang_ngay_trong_tuan = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
if(isset($_POST['thang']) && isset($_POST['nam'])){

    if($_POST['nam'] % 400 == 0 || $_POST['nam'] % 4 == 0 && $_POST['nam'] % 100 != 0)
    $nam_nhuan = 1;
    $ngay_trong_thang = cal_days_in_month(CAL_GREGORIAN, $_POST['thang'], $_POST['nam']);
    $date = date_create($_POST['nam'] . '/' . $_POST['thang'] . '/' . '01');
    $ngay_trong_tuan = date_format($date, 'D');
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
<title>In lịch</title>
</head>
<body>
<div class="container">
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>CALENDAR</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nhập tháng</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="number" name="thang" id="" class="form-control" value="<?php if(isset($_POST["thang"])) echo $_POST["thang"] ?>" required="required">                    
                </div>                
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Nhập năm</div>
                
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                    
                    <input type="number" name="nam" id="" class="form-control" value="<?php if(isset($_POST["nam"])) echo $_POST["nam"] ?>" required="required">
                </div>                
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">in lịch</button>
                </div>
            </div>
    </form>
    
    <div class="lich">        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <?php
                    foreach($mang_ngay_trong_tuan as $item_ngay){
                        ?>
                            <th>
                                <?php echo $item_ngay ?>
                            </th>
                        <?php
                    }
                    ?>                    
                </tr>
            </thead>

            <tbody>
                <?php
                $flag = 0;
                $in_ngay = 1;
                for($i=0;$i<42;$i++){
                    if($i % 7 == 0){
                        ?>
                            <tr>
                        <?php
                    }

                    if($mang_ngay_trong_tuan[$i % 7] == $ngay_trong_tuan){
                        $flag = 1;
                    }

                    if($flag == 1 && $in_ngay <= $ngay_trong_thang){
                        ?>
                            <td><?php echo $in_ngay ?></td>
                        <?php
                        $in_ngay++;
                    }else{
                        ?>
                            <td>?</td>
                        <?php
                    }

                    if($i % 7 == 6){
                        ?>
                            </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>        
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>