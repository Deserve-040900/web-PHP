<?php
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
</form>