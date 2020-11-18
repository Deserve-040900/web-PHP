<?php
// echo "<pre>",print_r($_SERVER),"</pre>";

header('Content-Type: application/json');

include_once('../../libraries/function.php');
include_once('../../model/xu_ly_sach.php');

if(isset($_SERVER['REQUEST_METHOD']) == "GET"){
    $xl_sach = new xu_ly_sach();
    $ds_sach = $xl_sach->lay_toan_bo_sach();

    echo json_encode(
        array(
            'error' => false,
            'message' => 'read all data',
            'data' => $ds_sach
        )
    );
}
else if(isset($_SERVER['REQUEST_METHOD']) == "POST"){ 
    $string_data = file_get_contents("php://input");
    $info_sach = json_decode($string_data);

    $xl_sach = new xu_ly_sach();
    $id_insert = $xl_sach->them_sach($info_sach->ten_sach, $info_sach->id_tac_gia, $info_sach->gioi_thieu, $info_sach->doc_thu, 
                            $info_sach->id_loai_sach, $info_sach->id_nha_xuat_ban, $info_sach->so_trang, $info_sach->ngay_xuat_ban, 
                        $info_sach->kich_thuoc, $info_sach->sku, $info_sach->trong_luong, $info_sach->trang_thai, $info_sach->hinh, 
                                $info_sach->don_gia, $info_sach->gia_bia, $info_sach->noi_bat);
    echo json_encode(
        array(
            'error' => false,
            'message' => 'add new book successfully',
            'data' => $id_insert
        )
    );
}
else if(isset($_SERVER['REQUEST_METHOD']) == "PUT"){
    $string_data = file_get_contents("php://input");
    $info_sach = json_decode($string_data);

    $arr_data = get_object_vars($info_sach);
    $id_update = $arr_data['id_cap_nhat'];
    unset($arr_data['id_cap_nhat']);

    $xl_sach = new xu_ly_sach();
    $ds_sach = $xl_sach->update_sach($arr_data, $id_update);
    echo json_encode(
        array(
            'error' => false,
            'message' => 'update all data',
            'data' => array()
        )
    );
}
else if(isset($_SERVER['REQUEST_METHOD']) == "DELETE"){
    $string_data = file_get_contents("php://input");
    $info_sach = json_decode($string_data);

    $xl_sach = new xu_ly_sach();
    $result = $xl_sach->xoa_sach($info_sach->id_xoa);
    echo json_encode(
        array(
            'error' => false,
            'message' => 'delete book successfully',
            'data' => $result
        )
    );
}
else{
    echo 'this method is not supported';
}
?>