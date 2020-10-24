<?php
function in_ds_sach_theo_data($ds_sach_can_in){
    foreach($ds_sach_can_in as $key => $item_sach){
        ?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item_sach">
            <div class="hinh">
                <img src="./public/image/sach/<?php echo $item_sach->hinh ?>" alt="hinh sach">
            </div>
            <div class="ten_sach">
                <?php echo $item_sach->ten_sach ?>
            </div>
            <div class="tac_gia">
                <?php echo $item_sach->ten_tac_gia ?>
            </div>
            <div class="don_gia">
                <?php echo $item_sach->don_gia ?>
            </div>
            <div class="button">
                <a href="<?php echo $item_sach->id ?>">
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></span>Mua Ngay
                </a>
            </div>
        </div>
        <?php
    }
}
function import_file($url_file){
    if(file_exists($url_file . '.php')){
        include_once($url_file . '.php');
    }
    else{
        echo 'Check lại file này ' . $url_file . '.php vì nó ko tồn tại';
    }
}
?>