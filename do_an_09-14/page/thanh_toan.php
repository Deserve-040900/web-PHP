<?php
import_file('./config/email_config');
import_file('./model/xu_ly_don_hang');
import_file('./libraries/class.phpmailer');
$don_hang = new xu_ly_don_hang();
$config = new config();

if(isset($_POST['ho_ten_nguoi_nhan']) && $_SESSION['gio_hang']){
    $tong_tien = tong_tien_thanh_toan();

    $add_id = $don_hang->add_don_hang($_POST['ho_ten_nguoi_nhan'], $_POST['email_nguoi_nhan'], $_POST['so_dien_thoai_nguoi_nhan'], $_POST['dia_chi_nguoi_nhan'], $tong_tien, $_SESSION['gio_hang']);
    // echo $add_id;

    if(isset($add_id)){
        $mat_hang = print_hoa_don();
        $phpmail = new PHPMailer();

        // setting send mail
        $phpmail->IsSMTP();
        $phpmail->CharSet = 'utf-8';
        $phpmail->SMTPAuth = true;
        $phpmail->SMTPSecure = 'ssl';
        $phpmail->Host = "smtp.gmail.com";
        $phpmail->Port = 465;
        $phpmail->IsHTML(true);
        $phpmail->SMTPDebug = 4;
        $phpmail->Username = $config->mail_user;
        $phpmail->Password = $config->password_email();
        $phpmail->SetForm("nkoxkiu2k@gmail.com");
        $phpmail->From = "nkoxkiu2k@gmail.com";
        $phpmail->Subject = "Cảm ơn bạn đã đặt hàng tại Bán Sách Online của chúng tôi";
        $phpmail->Body = '<div>Bạn đã đặt mua các sản phẩm với danh sách sau :</div>' . $mat_hang . 
                    '<div>Bạn có thể kiểm tra lại giỏ hàng <a href="'create_url_review_don_hang($add_id)'">tại đây</a></div>';
        $phpmail->AddAddress($_POST['email_nguoi_nhan']);
        
        if(!$phpmail->Send()){
            echo "<script> alert('Trong lúc gửi mail xảy ra sự cố !". $phpmail->ErrorInfo ."'); </script>";
        }
        else{
            unset($_SESSION['gio_hang']);
            ?>
            <script>
                alert('Đơn Hàng Đã Đặt Thành Công <3');
                window.location.href = '/MyProject-master/do_an_09-14/';
            </script>
            <?php
        }
        
    }
}
?>

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>Thông tin giao hàng</legend>
            </div>   

            <div class="form-group">            
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Họ Tên
                </div>
            
                <div class="col-sm-10">                    
                    <input type="text" name="ho_ten_nguoi_nhan" id="" class="form-control" value="" required="required" title="">                    
                </div>
            </div>

            <div class="form-group">            
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Email
                </div>
            
                <div class="col-sm-10">                    
                    <input type="email" name="email_nguoi_nhan" id="" class="form-control" value="" required="required" title="">                    
                </div>
            </div>

            <div class="form-group">            
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Số điện thoại
                </div>
            
                <div class="col-sm-10">                     
                    <input type="number" name="so_dien_thoai_nguoi_nhan" id="" class="form-control" value="" min="10" step="" required="required" title="">                                    
                </div>
            </div>

            <div class="form-group">            
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    Địa chỉ (nơi giao hàng)
                </div>
            
                <div class="col-sm-10">                     
                <input type="text" name="dia_chi_nguoi_nhan" id="" class="form-control" value="" required="required" title="">                          
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </div>
            </div>
    </form>
    
</div>

<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <?php
    include_once('./module/mod_gio_hang.php');
    ?>
</div>