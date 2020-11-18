<?php
include_once('./model/xu_ly_don_hang.php');
$don_hang = new xu_ly_don_hang();
$thong_tin_dh = $don_hang->thong_tin_dh($_POST['id_don_hang']);
?>

<div class="container">    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="thong_tin_user">
            <div class="name_nguoi_nhan">
                <?php echo $thong_tin_dh->ho_ten_nguoi_nhan ?>
            </div>
            <div class="phone_nguoi_nhan">
            </div>
            <div class="email_nguoi_nhan">
            </div>
            <div class="address_nguoi_nhan">
            </div>
        </div>
    </div>
    
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <?php print_chi_tiet_don_hang($thong_tin_dh->chi_tiet_don_hang) ?>
    </div>    
</div>