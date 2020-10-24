<?php
session_start();

if(isset($_GET['page'])){
    
    if(isset($_SESSION['thong_tin_user']) || isset($_COOKIE['thong_tin_USER'])){
        $thong_tin_user = $_SESSION['thong_tin_user'];
        $thong_tin_USER = $_COOKIE['thong_tin_USER'];
        
        if($_GET['page']=='sach'){
            include_once('./Pages/ds_sach03.php');
        }
        else if($_GET['page']=='dashboard'){
            include_once('./Pages/dashboard.php');
        }
        else{
            include_once('./Pages/404.php');
        }
    }
    else {
        header('location:/MyProject-master/do_an_09-12/admin/');
    }
}
else{
    include_once('./Pages/login.php');
}

?>