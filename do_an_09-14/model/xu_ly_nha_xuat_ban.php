<?php
check_and_include_model_database();

class xu_ly_nha_san_xuat extends database{
    function xu_ly_nha_san_xuat(){
        parent::data();
    }

    function ds_nha_san_xuat(){
        $string_sql = "SELECT * FROM bs_nha_xuat_ban";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }
}
?>