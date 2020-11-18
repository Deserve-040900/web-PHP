<?php
class nhan_vien{
    public $ho_ten, $ngay_vao_lam, $ngay_sinh, $he_so_luong, $so_con;

    function nhan_vien($ho_ten, $ngay_vao_lam, $ngay_sinh, $he_so_luong, $so_con){
        $this->ho_ten = $ho_ten;
        $this->ngay_vao_lam = $ngay_vao_lam;
        $this->ngay_sinh = $ngay_sinh;
        $this->he_so_luong = $he_so_luong;
        $this->so_con = $so_con;
    }
    function tien_luong(){
        return $this->he_so_luong * 5000000;
    }
    function tien_tro_cap(){
        return $this->so_con * 200000;
    }
    function tien_thuong(){
        if((date("Y") – date("Y", $this->ngay_vao_lam)) > 2){
            return (date("Y") – date("Y", $this->ngay_vao_lam)) * 500000;
        }
        else{ return 0;}
    }
    function thuc_linh(){
        return tien_luong() + tien_tro_cap() + tien_luong();
    }
}

class nv_van_phong extends nhan_vien{
    private $ngay_vang;
    private $dinh_muc_vang = 1;
    private $dinh_muc_phat = 50000;

    function nv_van_phong($ho_ten, $ngay_vao_lam, $ngay_sinh, $he_so_luong, $so_con, $ngay_vang){
        parent::nhan_vien($ho_ten, $ngay_vao_lam, $ngay_sinh, $he_so_luong, $so_con);
        $this->ngay_vang = $ngay_vang;
    }
    function tien_tro_cap($gioi_tinh){
        if($gioi_tinh == 1){
            return parent::tien_tro_cap() * 1.2;
        }else{
            return parent::tien_tro_cap();
        }
    }
    function tien_luong(){
        if($ngay_vang > $dinh_muc_vang){
            return parent::tien_luong() - (($this->ngay_vang - $this->dinh_muc_vang) * $this->dinh_muc_phat);
        }
    }
}

class nv_san_xuat extends nhan_vien{
    private $san_pham;
    private $dinh_muc_sp = 100;
    private $don_gia = 10000;

    function nv_san_xuat($ho_ten, $ngay_vao_lam, $ngay_sinh, $he_so_luong, $so_con, $san_pham){
        parent::nhan_vien($ho_ten, $ngay_vao_lam, $ngay_sinh, $he_so_luong, $so_con);
        $this->san_pham = $san_pham;
    }
    function tien_tro_cap($tang_ca){
        if($tang_ca == 1){
            return parent::tien_tro_cap() + 300000;
        }else{
            return parent::tien_tro_cap();
        }
    }
    function tien_luong(){
        if($san_pham > $dinh_muc_sp){
            return parent::tien_luong() + (($san_pham - $dinh_muc_sp) * $don_gia);
        }
    }
}
?>