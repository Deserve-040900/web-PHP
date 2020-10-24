<?php
if(isset($_SESSION['thong_tin_user']) || isset($_COOKIE['thong_tin_user'])){
    $thong_tin_user = $_SESSION['thong_tin_user'];
    $thong_tin_USER = $_COOKIE['thong_tin_USER'];
    header('location:/MyProject-master/do_an_09-12/admin/?page=dashboard');
    die();
}

if(isset($_POST['tai_khoan']) && isset($_POST['mat_khau'])){
    $tk = $_POST['tai_khoan'];
    $mk = $_POST['mat_khau'];

    include_once('../model/xu_ly_nguoi_dung.php');
    $nguoi_dung = new xu_ly_nguoi_dung();
    $user = $nguoi_dung->thong_tin_nguoi_dung($tk);

    if($user){
        echo "<pre>",print_r($user),"</pre>";
        if($user->mat_khau == md5($mk)){
            echo "Đăng nhập thành công";
            if($user->id_loai_user > 4){
                if($_POST['remember']){
                    setcookie('thong_tin_USER', $user->tai_khoan, time()+3600);
                }
                else{
                    $_SESSION['thong_tin_user'] = $user;
                }              
                header('location:/MyProject-master/do_an_09-12/admin/?page=dashboard');
            }
            else {
                echo "\nĐây không phải là account ADMIN";
            }
        }
        else{
            echo "\nSai mật khẩu !! vui lòng nhập lại mật khẩu";
        }
    }
    else{
        echo "\nTài khoản không tồn tại!! vui lòng đăng nhập lại";
    }
}
else{
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }

        button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        }

        button:hover {
        opacity: 0.8;
        }

        .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        }

        .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        }

        img.avatar {
        width: 40%;
        border-radius: 50%;
        }

        .container {
        padding: 16px;
        }

        span.psw {
        float: right;
        padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <h2>Login Form</h2>

    <form action="" method="post">
        <div class="imgcontainer">
            <img src="./image/avatar.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container-form">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="tai_khoan" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="mat_khau" required>
                
            <button type="submit">Login</button>
            <label>
            <input type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <div class="container-form" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
</body>
</html>
