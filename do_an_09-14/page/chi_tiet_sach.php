<?php
import_file('./model/xu_ly_sach');
// include_once('./model/xu_ly_sach.php');

$sach = new xu_ly_sach();
$thong_tin_sach = $sach->lay_thong_sach_theo_id($_GET['id_sach']);
?>

<body class="main-content">
    <div class="container-fluid">
        <div class="title-sach">
            <?php echo $thong_tin_sach->ten_sach ?>
        </div>     
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="image_sach">
                <img src="./public/image/sach/<?php echo $thong_tin_sach->hinh ?>" alt="hình bìa sách">
            </div>
        </div>
        
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="tac_gia">
                Tác Giả : <?php echo $thong_tin_sach->ten_tac_gia ?>
            </div>

            <div class="don_gia">
                Đơn giá : <?php echo $thong_tin_sach->don_gia ?>
            </div>

            <div class="gia_bia">
                Giá Bìa : <?php echo $thong_tin_sach->gia_bia ?>
            </div>

            <div class="gio_hang">
                <form action="/MyProject-master/do_an_09-14/?page=gio-hang" method="post">
                    <input type="number" name="so_luong" id="" class="form-control" value="" required="required" title="">                
                    <input type="hidden" name="id_sach" value="<?php echo $thong_tin_sach->id ?>">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        Thêm vào giỏ hàng
                    </button>
                </form>
            </div>

            <div class="clearfix"></div>

            <div class="gioi_thieu">
                Mô Tả : <?php echo $thong_tin_sach->gioi_thieu ?>
            </div>
        </div>        
    </div>
    <!-- /MyProject-master/do_an_09-14/?page=chi-tiet-sach&id_sach=2 -->
</body>
</html>