<?php
include_once('database.php');

class xu_ly_slide extends data{
    function xu_ly_slide(){
        parent::data();
    }

    function ds_slide(){
        $string_sql = "SELECT * FROM bs_slide_banner";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }
}
?>