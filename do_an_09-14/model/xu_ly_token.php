<?php
include_once('');
class xu_ly_token extends database{
    function xu_ly_token(){
        parent::data();
    }

    function thong_tin_token($id){
        $string_sql = "SELECT * FROM bs_token WHERE id = " . $id;
        $this->Set($string_sql);
        $this->execute();
        $result = $this->loadRow();
        return $result;
    }

    function them_token($id_user,$type_token){
        $token = uniqid();
        $expire_data = data("Y-m-d M-i-s", mktime(0,0,0,data("m"), date("d"), date("y")));

        $string_sql = "INSERT INTO bs_token (token, expire_data, type_token, id_user)
                VALUES ('$token','$expire_data','$type_token','$id_user')";
        $this->Set($string_sql);
        $this->execute();
        $idinsert = $this->InsertId();
        return $result;
    }
}
?>