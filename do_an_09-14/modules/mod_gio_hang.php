<?php
if(!isset($gio_hang) && isset($update_gio_hang)){
    if(isset($_SESSION['gio_hang'])){
        $gio_hang = $_SESSION['gio_hang'];
    }
    else{
        $gio_hang = [];
    }
}
?>

<form action="" method="post">
    <table class="table table-bordered table-hover table_gio_hang">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sách</th>
                <th>Hình</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                
                <?php
                if($update_gio_hang){
                    ?>
                        <th>Thao tác</th>
                    <?php
                }
                else{
                }
                ?>
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
                    <?php
                    if($update_gio_hang){
                        ?>
                        <td>                    
                            <input type="number" name="so_luong_update[<?php echo $item->id ?>]" id="so_luong_<?php echo $item->id ?>" class="form-control" value="<?php echo $item->so_luong ?>" min="1"step="1" title="">
                        </td>
                        <td><?php echo $item->don_gia ?></td>
                        <td><?php echo $item->so_luong * $item->don_gia ?></td>
                        <td>
                            <a href="/MyProject-master/do_an_09-14/?page=gio-hang&id_xoa=<?php echo $item->id ?>">                    
                                <button type="button" class="btn btn-danger">                            
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>                            
                                Xóa</button>
                            </a>
                        </td>
                        <?php
                    }
                    else{
                        ?>
                            <td><?php echo $item->so_luong?></td>
                            <td><?php echo $item->don_gia ?></td>
                            <td><?php echo $item->so_luong * $item->don_gia ?></td>
                        <?php
                    }
                    ?>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <div class="button">
        <?php
        if($update_gio_hang){
            ?>
            <input type="submit" name="btn_update" class="btn btn-primary" value="update giỏ hàng">
            
            <button type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                Xóa giỏ hàng
            </button>

            <a href="/MyProject-master/do_an_09-14/?page=thanh-toan" class="btn btn-success">
                <span class="glyphicon glyphicon-credit-cart" aria-hidden="true"></span>
                Thanh toán
            </a>
            <?php
        }
        else{
            ?>
            <a href="/MyProject-master/do_an_09-14/?page=gio-hang" class="btn btn-info">
                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                Quay lại giỏ hàng
            </a>
            <?php
        }
        ?>
    </div>
</form>