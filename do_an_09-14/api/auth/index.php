<?php
include_once('../../model/xu_ly_sach.php');
include_once('../../model/xu_ly_nguoi_dung.php');
include_once('../../model/xu_ly_token.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $xl_nguoi_dung = new xu_ly_nguoi_dung();
    $xl_token = new xu_ly_token();

    $string_data = 
}

$tk = $info_dang_nhap->tai_khoan;
$mk = $info_dang_nhap->mat_khau;

$user = $xl_nguoi_dung->thong_tin_nguoi_dung_theo_tai_khoan($tk);

if($user){
    if($user->mat_khau == md5($mk)){
        $id_token = $xl_token->them_token($user->id, 'login token');
        $thong_tin_token = $xl_token->thong_tin_token($id_token);

        echo json_encode(array("error" => false, 'message' => 'login successfully', "data" => $thong_tin_token))
    }
    else{
        echo json_encode(array("error" => true, 'message' => 'login failed, please check your username and password', "data" => $thong_tin_token))
    }
}
else{
    echo json_encode(array("error" => true, 'message' => "login failed, your account doesn't exist", "data" => $thong_tin_token))
}
?>