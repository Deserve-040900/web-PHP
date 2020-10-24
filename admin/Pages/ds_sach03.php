<?php
$so_sach_tren_trang = 10;
$db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db','root','');

$db->query("set names utf8");

$SQL_query = "SELECT * FROM bs_sach";
$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach = $statement->fetchAll(PDO::FETCH_OBJ);

$trang_hien_tai = isset($_GET['trang']) ? $_GET['trang'] : 0;

$SQL_query = "SELECT * FROM bs_sach LIMIT " . $trang_hien_tai * $so_sach_tren_trang . ",$so_sach_tren_trang";
$statement = $db->prepare($SQL_query);
$statement->execute();
$ds_sach_hien_thi = $statement->fetchAll(PDO::FETCH_OBJ);

$so_luong = count($ds_sach);
$so_trang = ceil($so_luong/$so_sach_tren_trang);
?>

<!--JS mix&match PHP-->
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

    <!--simple Pagination and Ajax-->
    <link type="text/css" rel="stylesheet" href="./CSS/simplePagination.css"/>
    <script type="text/javascript" src="./JS/simplePagination.js"></script>

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
            <tbody id="data_show">
            </tbody>
        </table>

        <div class="simplePagination" id="simplePagination"></div>

        <script>
            function function_build_html(data_list){
                let string = "";
                for(var i=0;i<data_list.length;i++){
                    string += `
                    <tr>
                        <td>${data_list[i].id}</td>
                        <td>${data_list[i].ten_sach}</td>
                        <td>${data_list[i].don_gia}</td>
                        <td>${data_list[i].gia_bia}</td>
                        <td><input type="checkbox" name="chon_sach[]" value="${data_list[i].gia_bia}"></td>
                    </tr>`
                }
                console.log(string);
                $('#data_show').html(string);
            }
            $(function() {
                $('#simplePagination').pagination({
                    items: <?php echo $so_luong ?>,
                    itemsOnPage: 10,
                    cssStyle: 'black-theme',
                    onPageClick: function(pageNumber) {
                        console.log(pageNumber-1);
                        // // We need to show and hide `tr`s appropriately.
                        // var showFrom = perPage * (pageNumber - 1);
                        // var showTo = showFrom + perPage;

                        // // We'll first hide everything...
                        // items.hide()
                        //     // ... and then only show the appropriate rows.
                        //     .slice(showFrom, showTo).show();
                        $.get('http://localhost/MyProject-master/buoi%2009/admin/api.php?trang=' + (pageNumber-1))
                            .done(data) => {
                                console.log(JSON.parse(data));
                                function_build_html(JSON.parse(data));
                            })

                            .fail((error) => {
                                console.log(error)
                            })
                    }
                });
            });
        </script>
    </div>    
</body>
</html>