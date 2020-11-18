<?php
include_once('./model/xu_ly_sach.php');

$sach = new xu_ly_sach();
$sach_noi_bat = $sach->ds_sach_noi_bat();

$sach_moi = $sach->ds_sach_moi();

$sach_ban_chay = $sach->ds_sach_ban_chay();
//echo "<pre>",print_r($ds_slide_banner),"</pre>"
?>

<body class="main-content">
    <div class="container-fluid">

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