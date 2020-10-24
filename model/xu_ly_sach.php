<?php
include_once('./model/database.php');

class xu_ly_sach extends data{
    function xu_ly_sach(){
        parent::data();
    }

    function ds_sach_theo_loai($dieu_kien, $gia_tri, $phuong_thuc_so_sach = '='){
        $string_sql = "SELECT s.*, ten_tac_gia 
                        FROM bs_sach s 
                        JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id 
                        WHERE $dieu_kien $phuong_thuc_so_sach " . $gia_tri;
        $this->Set($string_sql);
        $this->execute();
        $result = $this->fecth();
        return $result;
    }

    function ds_sach_noi_bat(){
        $string_sql = "SELECT s.*, ten_tac_gia 
                        FROM bs_sach s 
                        JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id 
                        WHERE noi_bat = 1";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->fecth();
        return $result;
    }

    function ds_sach_moi(){
        $string_sql = "SELECT s.*, ten_tac_gia 
                        FROM bs_sach s 
                        JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id 
                        ORDER BY id DESC
                        LIMIT 8";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->fecth();
        return $result;
    }

    function ds_sach_ban_chay(){
        $string_sql = "SELECT s.*, ten_tac_gia, SUM(so_luong) as tong_so_luong
                        FROM bs_sach s 
                        JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id
                        JOIN bs_chi_tiet_don_hang ctdh ON s.id = ctdh.id_sach 
                        ORDER BY s.id
                        ORDER BY tong_so_luong DESC
                        LIMIT 8";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->fecth();
        return $result;
    }

    function lay_thong_sach_theo_id($id_sach){
        $string_sql = "SELECT s.*, ten_tac_gia 
                        FROM bs_sach s 
                        JOIN bs_tac_gia tg ON s.id_tac_gia = tg.id 
                        WHERE s.id = " . $id_sach;
        // echo $string_sql; exit;
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
    }
}
?>