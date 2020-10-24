<?php
include_once('./model/xu_ly_slide.php');
include_once('./model/xu_ly_sach.php');

$banner = new xu_ly_slide();
$ds_slide_banner = $banner->ds_slide();

$sach = new xu_ly_sach();
$sach_noi_bat = $sach->ds_sach_noi_bat();

$sach_moi = $sach->ds_sach_moi();

$sach_ban_chay = $sach->ds_sach_ban_chay();
//echo "<pre>",print_r($ds_slide_banner),"</pre>"
?>

<body class="main-content">
<div class="container-fluid">
    <div id="carousel-id" class="carousel slide slide-banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach($ds_slide_banner as $key => $item){
                $active = ($key == 0)?'active':'';
                ?>
                <li data-target="#carousel-id" data-slide-to="0" class="<?php echo $active ?>"></li>
                <?php
            }
            ?>
        </ol>
        
        <div class="carousel-inner">
            <?php
            foreach($ds_slide_banner as $key => $item){
                $active = ($key == 0)?'active':'';
                ?>
                <div class="item <?php echo $active ?>">
                    <img src="./public/image/slide_banner/<?php echo $item->hinh ?>" alt="slide banner">
                </div>
                <?php
            }
            ?>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    
        <div class="ds_sach">
            <div class="container module_noi_bat">
                <div class="title-module">
                    SÁCH NỔI BẬT
                </div>
                <div class="ds_sach">
                    <?php in_ds_sach_theo_data($sach_noi_bat) ?>
                </div>
            </div>

            <div class="container-fluid module_moi">
                <div class="title-module">
                    SÁCH MỚI
                </div>
                <div class="ds_sach">
                    <?php in_ds_sach_theo_data($sach_moi) ?>
                </div>
            </div>

            <div class="container module_ban_chay">
                <div class="title-module">
                    SÁCH BÁN CHẠY
                </div>
                <div class="ds_sach">
                    <?php in_ds_sach_theo_data($sach_ban_chay) ?>
                </div>
            </div>
        </div>
    
</div>
</body>
</html>