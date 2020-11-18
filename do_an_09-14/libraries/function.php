<?php
function import_file($url_file){
    if(file_exists($url_file . '.php')){
        include_once($url_file . '.php');
    }
    else{
        echo 'Check lại file này ' . $url_file . '.php vì nó ko tồn tại';
    }
}

function in_ds_sach_theo_data($ds_sach_can_in){
    foreach($ds_sach_can_in as $key => $item_sach){
        ?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 item_sach">
            <a href="/MyProject-master/do_an_09-14/?page=chi-tiet-sach&id_sach=<?php echo $item_sach->id ?>"></a>
            <div>
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
        </div>
        <?php
    }
}

function tong_tien_thanh_toan(){
    if(isset($_SESSION['gio_hang'])){
        $gio_hang = $_SESSION['gio_hang'];
    }
    else{
        $gio_hang = [];
    }

    $tong_tien = 0;
    foreach($gio_hang as $item){
        $tong_tien += $item->so_luong * $item->don_gia;
    }
    return $tong_tien;
}

function print_hoa_don(){
    if(isset($_SESSION['gio_hang'])){
        $gio_hang = $_SESSION['gio_hang'];
    }
    else{
        $gio_hang = [];
    }

    $chuoi_html = '<table cellspacing="0" cellpadding="10px" border="1">
        <tr>
            <th>Tên sách</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>';
    foreach($gio_hang as $item){
        $chuoi_html .='<tr>
            <td>' . $item->ten_sach . '</td>
            <td>' . $item->don_gia . '</td>
            <td>' . $item->so_luong . '</td>
            <td>' . $item->so_luong * $item->don_gia . '</td>
        </tr>';
    }
    $chuoi_html = '</table>';
    
    return $chuoi_html;
}

function create_url_review_don_hang($id_don_hang){
    return 'http://localhost/MyProject-master/do_an_09-14/?page=don_hang&id_don_hang=' . $id_don_hang;
}

function encrypt_custom($string){
    $number_time = 10;
    $new_string = $string;

    for($i = 0; $i < $number_time; $i++){
        $new_string = base64_encode($new_string);
    }

    return $new_string;
}

function decrypt_custom($string){
    $number_time = 10;
    $new_string = $string;

    for($i = 0; $i < $number_time; $i++){
        $new_string = base64_decode($new_string);
    }

    return $new_string;
}

function check_and_include_model_database(){
    if(file_exists('./model/database.php')){
        include_once('./model/database.php');
    }
    else if(file_exists('../model/database.php')){
        include_once('../model/database.php');
    }
    else{
        include_once('../../model/database.php');
    }
}

function print_chi_tiet_don_hang($chi_tiet_don_hang){
    if(count($chi_tiet_don_hang)){
        ?>
        <table class="table table-bordered table-hover table_gio_hang">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Hình</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($gio_hang as $item){
                    ?>
                    <tr>
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->ten_sach ?></td>
                        <td>
                            <img src="/MyProject-master/do_an_09-14/public/image/sach/<?php echo $item->hinh ?>" alt="">
                        </td>
                        <td>                    
                            <input type="number" name="so_luong_update[<?php echo $item->id ?>]" id="so_luong_<?php echo $item->id ?>" 
                                    class="form-control" value="<?php echo $item->so_luong ?>" min="1"step="1" title="">
                        </td>
                        <td><?php echo $item->don_gia ?></td>
                        <td><?php echo $item->so_luong * $item->don_gia ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    }
}
?>