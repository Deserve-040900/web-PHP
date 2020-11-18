<?php
class pheptinh{
    public $so_thu_nhat,$so_thu_hai;
//khi nào dùng hàm khởi tạo có tham số (ko tham số), ko có hàm khởi tạo nó chạy ko ???
    function pheptinh($so_thu_nhat,$so_thu_hai){
        $this->so_thu_nhat = $so_thu_nhat;
        $this->so_thu_hai = $so_thu_hai;
    }
    function num1(){
        return $this->so_thu_nhat;
    }
    function num2(){
        return $this->so_thu_hai;
    }
    function tong(){
        return $this->so_thu_nhat + $this->so_thu_hai;
    }
    function hieu(){
        return $this->so_thu_nhat - $this->so_thu_hai;
    }
    function tich(){
        return $this->so_thu_nhat * $this->so_thu_hai;
    }
    function thuong(){
        return $this->so_thu_nhat / $this->so_thu_hai;
    }
}
?>