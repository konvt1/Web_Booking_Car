<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    // $php_account='  <strong class="text-danger"><a class="nav-link" href="index.php?act=myaccount">'.$user.'</a></strong>
    // <strong class="text-danger"><a class="nav-link" href="index.php?act=logout">Thoát</a></strong>';
    $php_account = ' <a href="index.php?act=myaccount">' . $user . '</a>
                        <a href="index.php?act=logout">Thoát</a>';
} else {
    $php_account = '    
    <a href="index.php?act=dangnhap">ĐĂNG NHẬP</a>
     <a href="index.php?act=dangky">ĐĂNG KÝ</a>
';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Xe</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="containerfull padd20">
        <div class="container">
            <div class="logo col2"><img src="images/logo-bahozone-03-icon-h80.png" height="40" alt=""></div>
            <div class="menu col8">
                <div class="col3">
                    <form action="index.php?act=chuyenxe" method="POST">
                        <input type="text" name="kyw" id="" placeholder="Nhập từ khóa Tìm kiếm theo tên">
                        <input type="submit" name="timkiem" value="tìm kiếm">
                    </form>
                </div>

                <a href="index.php?act=trangchu">TRANG CHỦ</a>
                <a href="index.php?act=chuyenxe">CHUYẾN XE</a>
                <?= $php_account; ?>
                <!-- <a href="index.php?act=dangnhap">ĐĂNG NHẬP</a>
                    <a href="index.php?act=dangky">ĐĂNG KÝ</a> -->



            </div>
        </div>
    </div>

    <style>
        .col9 {
            float: left;
            width: 70%;
        }

        .col3 {
            float: left;
            width: 30%;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .menu form {
            margin-right: 10px;
            display: flex;
        }

        .menu input[type="text"] {
            padding: 5px;
        }

        .menu input[type="submit"] {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>