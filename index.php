<?php

session_start();
ob_start();
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = [];
}
include("config/connectdb.php");
include("config/danhmuc.php");
include("config/sanpham.php");
include("config/chuyenxe.php");
include("config/user.php");
include("config/giohang.php");
include("config/donhang.php");


$sphome1 = getall_chuyenxe();

$chuyenxe_new = sanpham_all(4);




include("view/head.php");
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dangnhap':
            // if (isset($_GET['act']) && ($_GET['act'] == 'dangnhap')) {
            //     // header('location: view/dangnhap.php');
            //     include("view/dangnhap.php");
            // }

            include("view/dangnhap.php");
            break;

        case 'login':
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $result = checkuser($user, $pass);
                if (is_array($result) && (count($result))) {
                    $_SESSION['s_user'] = $result;
                    header('location: index.php');
                } else {
                    $tb = "Tài khoản không tồn tại hoặc thông tin đăng nhập sai";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('location: index.php?act=dangnhap'); 
                }
            }   
            break;
        case 'myaccount':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                include("view/myaccount.php");
            }


            break;

        case 'logout':


            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
            }
            header('location:index.php');


            break;


        case 'updateuser':
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $tenkh = $_POST["tenkh"];
                $ngaysinh = $_POST["ngaysinh"];
                $gioitinh = $_POST["gioitinh"];
                $diachi = $_POST["diachi"];
                $sdt = $_POST["sdt"];
                $email = $_POST["email"];
                $cmnd = $_POST["cmnd"];
                $id = $_POST["id"];
                $role = 0;

                update_user($user, $pass, $tenkh, $ngaysinh, $gioitinh, $diachi, $sdt, $email, $cmnd, $id, $role);
                include("view/myaccount_confirm.php");
            }


            break;



        case 'chuyenxe':

            $cxdm = tuyenxe_all();
            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
            }

            if (isset($_POST["timkiem"]) && ($_POST["timkiem"])) {
                $kyw = $_POST["kyw"];
                $titlepage = "kết quả tìm kiếm với từ khóa " . $kyw;
            } else {
                $kyw = "";
                $titlepage = "";
            }

            $dssp = get_sanpham($kyw, $iddm, 9);



            include("view/chuyenxe.php");
            break;



        case 'trangchu':
            include("view/home.php");
            break;

        case 'gioithieu':
            include("view/test.php");
            break;

        case 'addcart':
            if (isset($_POST["addcart"])) {
                $tentuyen = $_POST["tentuyen"];
                $diemdi = $_POST["diemdi"];
                $diemden = $_POST["diemden"];
                $ngaykhoihanh = $_POST["ngaykhoihanh"];
                $giokhoihanh = $_POST["giokhoihanh"];
                $banggia = $_POST["banggia"];
                $soluong = $_POST["soluong"];
                $sp = array(
                    "tentuyen" => $tentuyen,
                    "diemdi" => $diemdi,
                    "diemden" => $diemden,
                    "ngaykhoihanh" => $ngaykhoihanh,
                    "giokhoihanh" => $giokhoihanh,
                    "banggia" => $banggia,
                    "soluong" => $soluong
                );
                array_push($_SESSION["giohang"], $sp);
                // echo var_dump($_SESSION["giohang"]);
                header('location: index.php?act=viewcart');
            }
            include("view/home.php");
            break;


        case 'viewcart':
            if (isset($_GET['delete_index'])) {
                $indexToDelete = $_GET['delete_index'];
                // Ensure index is valid and exists in the array
                if (isset($_SESSION['giohang'][$indexToDelete - 1])) {
                    unset($_SESSION['giohang'][$indexToDelete - 1]);
                }

                $tong = get_tong();
                $thanhtien = $tong;
            }

            if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                unset($_SESSION['giohang']);
                header('location: index.php');
                exit;
            }

            // Include viewcart.php only once
            include("view/viewcart.php");
            break;

        case 'delproduct':

            include("view/viewcart.php");
            break;




        case 'adduser':
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $user = $_POST["user"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];

                user_insert($user, $pass, $email);
            }
            include("view/dangky.php");
            break;

        case 'dangky':
            include("view/dangky.php");
            break;





        case 'chuyenxechitiet':
            $cxdm = tuyenxe_all();
            if (isset($_GET['idchuyenxe'])) {
                $machuyenxe = $_GET['idchuyenxe'];
                $cxchitiet = get_chuyenxe_byid($machuyenxe);
                include("view/chuyenxechitiet.php");
            } else {
                include("view/home.php");
            }
            break;
        case 'thanhtoan':
         if(isset($_POST['thanhtoan'])){
            // $machuyenxe=$_POST['machuyenxe'];
            $ten_nguoidat=$_POST['ten_nguoidat'];
            $mave="FUTAZONE".rand(1,9999);
            $diachi_nguoidat=$_POST['diachi_nguoidat'];
            $dienthoai_nguoidat=$_POST['dienthoai_nguoidat'];
            $diemdon=$_POST['diemdon'];
            $diemtra=$_POST['diemtra'];
            $ngaydat=$_POST['ngaydat'];
            $giokhachdat=$_POST['giokhachdat'];
            $tong="0".rand(1,9999);
            // $tong=$_POST['tong'];
            $makn="0".rand(1,100);
            $pttt=$_POST['pttt'];

            
            $id_donhang=insert_donhang($makn, $mave,$ten_nguoidat,$diachi_nguoidat,$dienthoai_nguoidat,$diemdon,$diemtra,$ngaydat, $giokhachdat, $tong,$pttt);

            $_SESSION['id_donhang_moi'] = $id_donhang;
            include("view/donhang_confirm.php");
            
            
         }
       
         $dsdm = getall_dm();
         $kq = getall_sanpham();
         include("view/donhang.php");
         break;
         
       

        default:
            include("view/home.php");
            break;
    }
} else {
    include("view/home.php");
}
include("view/footer.php");
