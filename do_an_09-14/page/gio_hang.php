<?php
import_file('./model/xu_ly_sach');
$sach = new xu_ly_sach();

if(isset($_SESSION['gio_hang'])){
    $gio_hang = $_SESSION['gio_hang'];
}
else{
    $gio_hang = [];
}

if(isset($_POST['btn_update'])){
    foreach($gio_hang as $item){
        $item->so_luong = $_POST['so_luong_update'][$item->id];
    }
    $_SESSION['gio_hang'] = $gio_hang;
}

if(isset($_GET['id_xoa'])){
    foreach($gio_hang as $key => $item){
        if($item->id == $_GET['id_xoa']){
            unset($gio_hang[$key]);
        }
    }
    $_SESSION['gio_hang'] = $gio_hang;
    ?>
    <script>
        window.location.href = '/MyProject-master/do_an_09-14/?page=gio-hang';
    </script>
    <?php
}
// echo "<pre>",print_r($_POST),"</pre>";
if(isset($_POST['so_luong']) && isset($_POST['id_sach'])){
    
    $thong_tin_sach = $sach->lay_thong_sach_theo_id($_POST['id_sach']);
    $thong_tin_sach->gioi_thieu = '';
    $thong_tin_sach->so_luong = $_POST['so_luong'];

    // có trong giỏ hàng rồi
    if(count($gio_hang) > 0){
        $flag = false;  // biến kiểm tra giỏ hàng
        foreach($gio_hang as $item){
            if($item->id == $_POST['id_sach']){
                $item->so_luong += $_POST['so_luong'];
                $flag = true;
            }
        }
        if($flag === false){
            $gio_hang[] = $thong_tin_sach;
        }
    }
    // chưa có trong giỏ hàng
    else{
        $gio_hang[] = $thong_tin_sach;
    }
    
    $_SESSION['gio_hang'] = $gio_hang;
    // echo "<pre>",print_r($_SESSION['gio_hang']),"</pre>";
}

$update_gio_hang = true;
include_once('./module/mod_gio_hang.php');
?>