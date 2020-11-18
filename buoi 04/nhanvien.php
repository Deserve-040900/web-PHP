<?php
include('./nhanvien-func.php');
if(isset($_POST['ho_ten']) && isset($_POST['so_con']) && isset($_POST['ngay_sinh']) && isset($_POST['ngay_vao_lam']) && isset($_POST['he_so_luong']) && isset($_POST['ngay_vang']) && isset($_POST['san_pham'])){
    $van_phong = new nv_van_phong($_POST['ho_ten'],$_POST['ngay_vao_lam'],$_POST['ngay_sinh'],$_POST['he_so_luong'],$_POST['so_con'],$_POST['ngay_vang']);
    $san_xuat = new nv_san_xuat($_POST['ho_ten'],$_POST['ngay_vao_lam'],$_POST['ngay_sinh'],$_POST['he_so_luong'],$_POST['so_con'],$_POST['san_pham']);
    $tro_cap_vp = $van_phong->tien_tro_cap($_POST['gioitinh']);
    echo "<pre>",print_r($tro_cap_vp),"</pre>";
    $tro_cap_sx = $san_xuat->tien_tro_cap($_POST['tangca']);
    echo "<pre>",print_r($tro_cap_sx),"</pre>";
}

// $nv = new nhan_vien('nguyen xuan','1080','21/11/2020','04/09/2000',1.5,1);
// $luong_vn = $nv->tien_luong();
// echo "<pre>",print_r($nv),"</pre>";
// echo "lương cơ bản của nhân viên " . $luong_vn;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>quản lý nhân viên</title>

<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>QUẢN LÝ NHÂN VIÊN</legend>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Họ và tên</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" name="ho_ten" id="input" class="form-control" value="<?php if(isset($_POST['ho_ten'])) echo $_POST['ho_ten'] ?>" required="required">                    
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Số con</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                    
                    <input type="number" name="so_con" id="input" class="form-control" value="<?php if(isset($_POST['so_con'])) echo $_POST['so_con'] ?>">                    
                </div>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Ngày sinh</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <input type="date" name="ngay_sinh" id="input" class="form-control" value="<?php if(isset($_POST['ngay_sinh'])) echo $_POST['ngay_sinh'] ?>" required="required">                    
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Ngày vào làm</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                    
                    <input type="date" name="ngay_vao_lam" id="input" class="form-control" value="<?php if(isset($_POST['ngay_vao_lam'])) echo $_POST['ngay_vao_lam'] ?>" required="required">                    
                </div>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Giới tính</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <input type="radio" name="gioitinh" id="nam" value="0" <?php if(isset($_POST['gioitinh']=='0') echo 'checked' ?>> Nam 

                    <input type="radio" name="gioitinh" id="nu" value="1" <?php if(isset($_POST['gioitinh']=='1') echo 'checked' ?>> Nữ 
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Hệ số lương</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                    
                    <input type="number" name="he_so_luong" id="input" class="form-control" value="<?php if(isset($_POST['he_so_luong'])) echo $_POST['he_so_luong'] ?>" required="required">                    
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Loại nhân viên</div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <input type="radio" name="nhanvien" id="" value="van_phong" <?php if(isset($_POST['nhanvien']=='van_phong') echo 'checked' ?>> Văn phòng 
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <input type="radio" name="nhanvien" id="" value="san_xuat" <?php if(isset($_POST['pheptinh']=='san_xuat') echo 'checked' ?>> Sản xuất 
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
            </div>

            <div class="form-group">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Số ngày vắng</div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="number" name="ngay_vang" id="input" class="form-control" value="<?php if(isset($_POST['ngay_vang'])) echo $_POST['ngay_vang'] ?>" required="required">
                    </div>                    
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Số sản phẩm</div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="number" name="san_pham" id="input" class="form-control" value="<?php if(isset($_POST['san_pham'])) echo $_POST['san_pham'] ?>" required="required">
                    </div> 
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                    
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">Tăng ca</div>
                    
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <input type="radio" name="tangca" id="" value="1" <?php if(isset($_POST['tangca']=='1') echo 'checked' ?>> Có 

                        <input type="radio" name="tangca" id="" value="0" <?php if(isset($_POST['tangca']=='0') echo 'checked' ?>> Không 
                    </div>                  
                </div>
            </div>

            <div class="form-group">                
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Tiền lương</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <input type="number" name="tien_luong" id="input" class="form-control" value="<?php if($_POST['nhanvien'] == 'van_phong'){ echo $van_phong->tien_luong(); } else{ echo $san_xuat->tien_luong(); } ?>">                    
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Trợ cấp</div>
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                    
                    <input type="number" name="tro_cap" id="input" class="form-control" value="<?php if($_POST['nhanvien'] == 'van_phong'){ echo $tro_cap_vp; } else{ echo $tro_cap_sx; } ?>">                    
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-3">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Thực lĩnh</div>
                
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                    
                        <input type="number" name="thuc_linh" id="input" class="form-control" value="<?php if($_POST['nhanvien'] == 'van_phong'){ echo $van_phong->thuc_linh(); } else{ echo $san_xuat->thuc_linh(); } ?>">                    
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-5">
                    <button type="submit" class="btn btn-primary">Tính lương</button>
                </div>
            </div>
    </form>    
</div>
</body>
</html>