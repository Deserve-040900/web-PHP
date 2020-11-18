<?php
include_once('database.php');

class xu_ly_don_hang extends data {
    function xu_ly_don_hang(){
        parent::data();
    }

    function loai_sach_theo_id_cha($id_loai_cha = 0){
        $string_sql = "SELECT ls.*
                        FROM bs_loai_sach ls
                        WHERE id_loai_cha = " . $id_loai_cha;
        $this->Set($string_sql);
        $this->execute();
        $result = $this->fecth();
        return $result;
    }

    function add_don_hang($ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $dia_chi_nguoi_nhan, $tong_tien, $gio_hang){
        $string_sql = "INSERT INTO `bs_don_hang` (`tong_tien`, `ngay_dat`, `id_nguoi_dung`, `ho_ten_nguoi_nhan`, `email_nguoi_nhan`, `so_dien_thoai_nguoi_nhan`, `trang_thai`, `dia_chi_nguoi_nhan`) 
            VALUES ('$tong_tien', CONCAT(CURRENT_DATE, ' ', CURRENT_TIME), NULL, '$ho_ten_nguoi_nhan', '$email_nguoi_nhan', '$so_dien_thoai_nguoi_nhan', '1', '$dia_chi_nguoi_nhan');";
        $this->Set($string_sql);
        $this->execute();
        $insert = $this->InsertId();

        $string_sql_builder = [];
        foreach($gio_hang as $item){
            $string_sql_builder[] = "('$insert','$item->id','$item->so_luong','$item->don_gia','')";
        }

        $string_sql_ctdh = "INSERT INTO `bs_chi_tiet_don_hang` (`id_don_hang`, `id_sach`, `so_luong`, `don_gia`, `thanh_tien`) 
                        VALUE " . implode(',',$string_sql_builder);
        $this->Set($string_sql_ctdh);
        $this->execute();

        return $insert;
    }

    function thong_tin_dh($id_dh){
        $string_sql = "SELECT *
                        FROM bs_sach
                        WHERE id = " . $id_don_hang;
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadRow();

        if($result){
            $string_sql_ctdh = "SELECT ls.*
                                FROM bs_chi_tiet_don_hang ctdh
                                JOIN bs_sach s
                                ON ctdh.id_sach = s.id
                                WHERE id_don_hang = " . $id_don_hang;
            $this->Set($string_sql_ctdh);
            $this->execute();
            $result_ctdh = $this->loadAllRow();

            $result->chi_tiet_don_hang = $result_ctdh;
        }
        return $result;
    }
}
?>