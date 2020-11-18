<?php
$so_sach_tren_trang = 10;
$db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db','root','');

$db->query("set names utf8");

$SQL_query = "SELECT * FROM bs_sach";
$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach = $statement->fetchAll(PDO::FETCH_OBJ);

if(isset($_GET['trang'])){
    $trang_hien_tai = $_GET['trang'];
}else{
    $trang_hien_tai = 0;
}
// $trang_hien_tai = isset($_GET['trang']) ? $_GET['trang'] : 0;

// lấy ds sách theo trang
$SQL_query = "SELECT * FROM bs_sach LIMIT " . $trang_hien_tai*$so_sach_tren_trang . ",$so_sach_tren_trang";
// echo $SQL_query;
$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach_hien_thi = $statement->fetchAll(PDO::FETCH_OBJ);

$so_luong = count($ds_sach);
// echo $so_luong;
$so_trang = ceil($so_luong/$so_sach_tren_trang);
?>

<!-- PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sách</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="title_page">
            Danh sách Sách
        </div>
        
        <table id="table_sach" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sách</th>
                    <th>Đơn Giá</th>
                    <th>Giá Bìa</th>
                    <th>Chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($ds_sach as $item){
                ?>
                <tr>
                    <td><?php echo $item->id ?></td>
                    <td><?php echo $item->ten_sach ?></td>
                    <td><?php echo $item->don_gia ?></td>
                    <td><?php echo $item->gia_bia ?></td>
                    <td><input type="checkbox" name="chon_sach[]" id="choose" value="<?php echo $item->id; ?>"></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="phan_trang">
            <div class="list_trang">
                <?php
                for($i=0; $i<$so_trang; $i++){
                    ?>
                    <li><a href="<?php echo $_SERVER['REQUEST_URI'] ?> &trang = <?php echo $i ?>"><?php echo $i+1 ?></a></li>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>    
</body>
</html>