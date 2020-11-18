<?php
$so_sach_tren_trang = 10;
$db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db','root','');

$db->query("set names utf8");

$SQL_query = "SELECT * FROM bs_sach";
$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach = $statement->fetchAll(PDO::FETCH_OBJ);

$trang_hien_tai = isset($_GET['trang']) ? $_GET['trang'] : 0;

// lấy ds sách theo trang
$SQL_query = "SELECT * FROM bs_sach LIMIT " . $trang_hien_tai*$so_sach_tren_trang . ",$so_sach_tren_trang";
$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach_hien_thi = $statement->fetchAll(PDO::FETCH_OBJ);

$so_luong = count($ds_sach);
$so_trang = ceil($so_luong/$so_sach_tren_trang);
?>

<!--Javascript-->
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

    <script src="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script> 
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

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
        
        <script>
            $(document).ready( function () {
                $('#table_sach').DataTable();
            } );
        </script>
    </div>    
</body>
</html>