<?php
check_and_include_model_database();

class xu_ly_tac_gia{
    function xu_ly_tac_gia(){
        parent::data();
    }

    function ds_tac_gia(){
        $string_sql = "SELECT * FROM bs_tac_gia";
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadAllRow();
        return $result;
    }
}
?>