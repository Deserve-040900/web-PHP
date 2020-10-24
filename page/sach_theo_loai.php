<?php
include_once('./model/xu_ly_sach.php');

$xl_sach = new xu_ly_sach();
$xl_loai_sach = new xu_ly_loai_sach();

$ds_loai_con = $xl_loai_sach->loai_sach_theo_id_cha($_GET['id_loai_sach']);
if(count($ds_loai_con)){
    $arr_id_loai_sach = [];
    foreach($ds_loai_con as $loai_con){
        $arr_id_loai_sach[] = $loai_con->id;
    }
    $ds_theo_loai = $xl_sach->ds_sach_theo_loai('id_loai_sach',"(" . implode('.', $arr_id_loai_sach) . ')',"IN");
}
else{
    $ds_theo_loai = $xl_sach->ds_sach_theo_loai('id_loai_sach',$_GET['id_loai_sach']);
}
?>

<body class="main-content">
    <div class="container-fluid">
        <?php 
        //echo "<pre>",print_r($ds_loai_sach),"</pre>";
        in_ds_sach_theo_data($ds_theo_loai);
        ?>
    </div>
</body>
</html>