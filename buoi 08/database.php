<?php
print_r(PDO::getAvailableDrivers());

$db = new PDO('mysql:host=localhost;dbname=ban_sach_online_db','root','');
$sql = "INSERT INTO `bs_menu` (`id`, `tieu_de`, `alias`, `trang_thai`, `menu_cha`) VALUES (NULL, 'sql kho qua', 'ai do cuu tui', '2', '1');";
// $sql = "DELETE FROM `bs_menu` WHERE `bs_menu`.`id` = 2";
$count = $db ->exec($sql);
echo $count;

$db->query("set names utf8");

$SQL_query = "SELECT * FROM bs_sach";
$mang = $db->query($SQL_query);

$statement = $db->prepare($SQL_query);
$statement->execute();
//$result = $statement->fetch(PDO::FETCH_OBJ);
//$result = $statement->fetch(PDO::FETCH_ASSOC);
$result = $statement->fetchAll(PDO::FETCH_OBJ);

//echo '<pre>',print_r($result),'</pre>';
foreach($result as $item_sach){
    echo $item_sach->ten_sach;
}
?>