<?php
class data{
    public $sql, $db, $stm;
    function data(){
        $this->db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db','root','');
        $this->db->query("set names utf8");
    }
    function Set($SQL){
        $this->sql = $SQL;
    }
    function execute(){
        $this->stm = $this->db->prepare($this->sql);
        $this->stm->execute();
        return $this->stm->rowCount();
    }
    function loadAllRow(){
        return $this->stm->fetchAll(PDO::FETCH_OBJ);
    }
    function loadRow(){
        return $this->stm->fetch(PDO::FETCH_OBJ);
    }
    function InsertId(){
        return $this->db->lastInsertId();
    }
}
?>