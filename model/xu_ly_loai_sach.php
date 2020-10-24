<?php
include_once('./model/database.php');

class xu_ly_loai_sach extends data {
    function xu_ly_loai_sach(){
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

    function tat_ca_loai_sach_theo_cha(){
        // $string_sql = "SELECT ls.*
        //                 FROM bs_loai_sach ls
        //                 WHERE id_loai_cha = 0";
        // $this->Set($string_sql);
        // $this->execute();
        // $result = $this->fecth();
        // return $result;
        $ds_loai_cha = $this->loai_sach_theo_id_cha();
        $this->recursion_lay_toan_bo_con($ds_loai_cha);
        return $ds_loai_cha;
    }

    function recursion_lay_toan_bo_con(){
        foreach($ds_loai_cha as $loai_cha){
            $ds_loai_con = $this->loai_sach_theo_id_cha($loai_cha->id);

            if(count($ds_loai_con) > 0){
                $this->de_quy_lay_toan_bo_con($ds_loai_con);
            }
            $loai_cha->ds_con = $ds_loai_con;
        }
    }

    function print_tat_ca_loai_sach_theo_cha($ds_loai_cha){
        foreach($ds_loai_cha as $item_loai_cha){
            ?>
            <li class="dropdown-submenu">
                <a href="#"><?php echo $item_loai_cha->$ten_loai_sach ?></a>
                <?php $this->print_recursion_loai_con($item_loai_cha) ?>
            </li>
            <?php
        }
    }

    function print_recursion_loai_con($item_loai_cha){
        if(count($item_loai_cha->ds_con)){
            ?>
            <ul class="dropdown-menu hidden-xs hidden-sm">
                <?php
                foreach($item_loai_cha->ds_con as $item_loai_con){
                    ?>
                    <li class="dropdown-submenu">
                        <a href=""><?php echo $item_loai_con->$ten_loai_sach ?></a>
                        <?php $this->print_recursion_loai_con($item_loai_con) ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <?php
        }
    }
}
?>