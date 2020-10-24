<?php
include_once('./libraries/function.php');
include_once('./widget/head.php');
include_once('./widget/header.php');

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
    else{
        include_once('./page/trang_chu.php');
    }
}
else{
    include_once('./page/trang_chu.php');
}

?>