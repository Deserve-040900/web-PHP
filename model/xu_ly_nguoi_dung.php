<?php
if(file_exists('./model/database.php')){
    include_once('./model/database.php');
}
else{
    include_once('../model/database.php');
}

class xu_ly_nguoi_dung extends data{
    function xu_ly_nguoi_dung(){
        parent::data();
    }

    function thong_tin_nguoi_dung($tk){
        $string_sql = "SELECT * FROM bs_nguoi_dung WHERE tai_khoan = '$tk'";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
    }
}
?>