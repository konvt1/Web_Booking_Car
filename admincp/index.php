<?php
session_start();
ob_start();
if (isset($_SESSION['s_user']) && (is_array($_SESSION['s_user'])) && (count($_SESSION['s_user']) > 0)) {
  $admin = $_SESSION['s_user'];



  include("../config/connectdb.php");
  include("../config/danhmuc.php");
  include("../config/sanpham.php");
  include("../config/admin.php");
  include("../config/donhang.php");

  $kq = getall_dm();
  // connectdb();

?>
  <h1>Tài khoản: <?= $admin["user"] ?></h1>
<?php
  include("view/header.php");

  if (isset($_GET['act'])) {
    switch ($_GET['act']) {
      case 'danhmuc':
        include("view/danhmuc.php");
        $kq = getall_dm();
        break;
      case 'tuyenxe_add':
        if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
          $tentuyen = $_POST['tentuyen'];
          $diemdau = $_POST['diemdau'];
          $thoigian = $_POST['thoigian'];
          themdm($tentuyen, $diemdau, $thoigian);
        }

        include("view/tuyenxe_add.php");
        $kq = getall_dm();
        break;

      case 'deldm':
        if (isset($_GET['id'])) {
          $id =  $_GET['id'];
          deldm($id);
        }
        $kq = getall_dm();
        include("view/danhmuc.php");
        break;

      case 'updateform':
        if (isset($_GET['id'])) {
          $id =  $_GET['id'];
          $kqone = getonedm($id);
          $kq = getall_dm();
          include("view/updateform.php");
        }
        if (isset($_POST['matuyen'])) {
          $matuyen = $_POST['matuyen'];
          $tentuyen =  $_POST['tentuyen'];
          $diemdau =  $_POST['diemdau'];
          $thoigian =  $_POST['thoigian'];
          updatedm($matuyen, $tentuyen, $diemdau, $thoigian);
          $kq = getall_dm();
          include("view/danhmuc.php");
        }

        break;
      case 'sanpham':

        $dsdm = getall_dm();

        $kq = getall_sanpham();
        include("view/sanpham.php");
        break;

      case 'donhang':

        $kq = getall_donhang();

        include("view/donhang.php");
        break;
      case 'chuyenxe_add':
        if ((isset($_POST['themmoi'])) && isset($_POST['themmoi'])) {


          $matuyen = $_POST['matuyen'];
          $tentuyen = $_POST['tentuyen'];
          $ngaykhoihanh = $_POST['ngaykhoihanh'];
          $giokhoihanh = $_POST['giokhoihanh'];
          $diemdi = $_POST['diemdi'];
          $diemden = $_POST['diemden'];
          $banggia = $_POST['banggia'];

          insert_sanpham($matuyen, $tentuyen, $ngaykhoihanh, $giokhoihanh, $diemdi, $diemden, $banggia);
        }
        $dsdm = getall_dm();
        $kq = getall_sanpham();
        include("view/chuyenxe_add.php");
        break;
      case 'updateformsp':

        $dsdm = getall_dm();
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $spct = getonesp($_GET['id']);
        }

        $kq = getall_sanpham();
        include("view/updateformsp.php");
        break;

      case 'sanpham_update':

        $dsdm = getall_dm();
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
          $machuyenxe = $_POST['machuyenxe'];
          $matuyen = $_POST['matuyen'];
          $tentuyen = $_POST['tentuyen'];
          $ngaykhoihanh = $_POST['ngaykhoihanh'];
          $giokhoihanh = $_POST['giokhoihanh'];
          $diemdi = $_POST['diemdi'];
          $diemden = $_POST['diemden'];
          $banggia = $_POST['banggia'];
          updatesp($machuyenxe, $matuyen, $tentuyen, $ngaykhoihanh, $giokhoihanh, $diemdi, $diemden, $banggia);
        }

        $kq = getall_sanpham();
        include("view/sanpham.php");
        break;

      case 'delsp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $id = $_GET['id'];
          delsp($id);
        }
        // if (isset($_GET['id'])) {
        //   $id =  $_GET['id'];
        //   delsp($id);
        // }
        $kq = getall_sanpham();
        include("view/sanpham.php");
        break;

      case 'deldon':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $id = $_GET['id'];
          deldon($id);
        }

        $kq = getall_donhang();
        include("view/donhang.php");
        break;
      case 'taikhoan':
        $kq=getall_user();

        include("view/taikhoan.php");
        break;

      case 'dangxuat':
        if (isset($_SESSION['s_user'])) unset($_SESSION['s_user']);
        header('location: login.php');
        break;

      case 'users_add':
        if (isset($_POST['btnadd'])) {
          $tenkh = $_POST['tenkh'];
          $ngaysinh = $_POST['ngaysinh'];
          $gioitinh = $_POST['gioitinh'];
          $diachi = $_POST['diachi'];
          $sdt = $_POST['sdt'];
          $email = $_POST['email'];
          $cmnd = $_POST['cmnd'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];


          users_insert($tenkh, $ngaysinh, $gioitinh, $diachi, $sdt, $email, $cmnd, $user, $pass);
        }
        include("view/users_add.php");
        break;
      case 'donhang':
        include("view/donhang.php");
        break;
      default:
        # code...
        break;
    }
  } else {
    include("view/home.php");
  }

  include("view/footer.php");
} else {
  header('location: login.php');
}
?>