<?php
session_start();

include_once('./libraries/function.php');
include_once('./model/xu_ly_slide.php');
include_once('./model/xu_ly_sach.php');

$banner = new xu_ly_slide();
$ds_slide_banner = $banner->ds_slide();

include_once('./widget/head.php');
include_once('./widget/header.php');
include_once('./widget/slidebanner.php');

if(isset($_GET['page'])){
    if($_GET['page']=='sach'){
        include_once('./admin/Pages/ds_sach02.php');
    }
    else if($_GET['page'] == 'loai-sach'){
        include_once('./page/sach_theo_loai.php');
    }
    else if($_GET['page'] == 'chi-tiet-sach'){
        include_once('./page/chi_tiet_sach.php');
    }
    else if($_GET['page'] == 'gio-hang'){
        include_once('./page/gio_hang.php');
    }
    else if($_GET['page'] == 'thanh-toan'){
        include_once('./page/thanh_toan.php');
    }
    else if($_GET['page'] == 'don-hang'){
        include_once('./page/don_hang.php');
    }
    else{
        include_once('./page/trang_chu.php');
    }
}
else{
    include_once('./page/trang_chu.php');
}

?>