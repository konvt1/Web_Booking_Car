<?php
function getall_sanpham()

{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM chuyenxe");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}


function insert_sanpham($matuyen, $tentuyen, $ngaykhoihanh, $giokhoihanh, $diemdi, $diemden, $banggia)
{

  $conn = connectdb();



  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO chuyenxe (matuyen,tentuyen, ngaykhoihanh, giokhoihanh,diemdi,diemden,banggia)
    VALUES ('" . $matuyen . "','" . $tentuyen . "', '" . $ngaykhoihanh . "', '" . $giokhoihanh . "','" . $diemdi . "','" . $diemden . "','" . $banggia . "')";

  $conn->exec($sql);
  echo "thêm thành công";


  $conn = null;
}


function delsp($id)
{

  $conn = connectdb();
  try {


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM chuyenxe WHERE machuyenxe = " . $id;


    $conn->exec($sql);
    echo "Record deleted successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
}


function getonesp($id)
{
  $conn = connectdb();

  $sql = "SELECT * FROM chuyenxe WHERE matuyen = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

  $kq = $stmt->fetchAll();

  return $kq;
}
function updatesp($machuyenxe, $matuyen, $tentuyen, $ngaykhoihanh, $giokhoihanh, $diemdi, $diemden, $banggia)
{


  $conn = connectdb();
  try {


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "UPDATE chuyenxe SET tentuyen='" . $tentuyen . "', ngaykhoihanh='" . $ngaykhoihanh . "',giokhoihanh='" . $giokhoihanh . "',diemdi='" . $diemdi . "',diemden='" . $diemden . "',banggia='" . $banggia . "' WHERE machuyenxe=" . $machuyenxe;


    $stmt = $conn->prepare($sql);

    $stmt->execute();


    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
}
function get_dssp($diemdi, $diemden)
{
  $conn = connectdb();
  $sql = "SELECT * FROM chuyenxe WHERE 1";

  if (!empty($diemdi)) {
    $sql .= " AND diemdi LIKE :diemdi";
  }

  if (!empty($diemden)) {
    $sql .= " AND diemden LIKE :diemden";
  }

  $stmt = $conn->prepare($sql);

  if ($diemdi != "") {
    $stmt->bindValue(':diemdi', '%' . $diemdi . '%', PDO::PARAM_STR);
  }

  if ($diemden != "") {
    $stmt->bindValue(':diemden', '%' . $diemden . '%', PDO::PARAM_STR);
  }

  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $result;
}


function sanpham_all($limit)
{
  $conn = connectdb();
  $sql = "SELECT * FROM chuyenxe order by machuyenxe desc limit " . $limit;
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $result;
}
function get_sanpham($kyw, $iddm, $limit)
{
  try {
    $conn = connectdb();
    $sql = "SELECT * FROM chuyenxe WHERE 1 ";
    if ($iddm > 0) {
      $sql .= " AND matuyen = :iddm";
    }
    if ($kyw != "") {
      $sql .= " AND (diemdi LIKE :kyw OR diemden LIKE :kyw)";
    }
    $sql .= " ORDER BY machuyenxe DESC LIMIT :limit";

    $stmt = $conn->prepare($sql);

    if ($iddm > 0) {
      $stmt->bindParam(':iddm', $iddm, PDO::PARAM_INT);
    }

    if ($kyw != "") {
      $likeParam = '%' . $kyw . '%';
      $stmt->bindParam(':kyw', $likeParam, PDO::PARAM_STR);
    }

    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    return false;
  }
}
function get_chuyenxe_byid($machuyenxe)
{
  try {
    $conn = connectdb();
    $sql = "SELECT * FROM chuyenxe WHERE machuyenxe = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$machuyenxe]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    return false;
  }
}
function showsp($chuyenxe)
{
  usort($chuyenxe, function ($a, $b) {
    return $a['banggia'] - $b['banggia'];
  });
  $php_chuyenxe_new = '';
  foreach ($chuyenxe as $cx) {
    extract($cx);
    $link = "index.php?act=chuyenxechitiet&idchuyenxe=" . $machuyenxe;
    $php_chuyenxe_new .= '<div class="box25 mr15">
        <a href="' . $link . '">
        <img src="img/hcm1.jpg" alt=""> </a>
        <span class="price">' . $tentuyen . '</span>
        <span class="price">' . $ngaykhoihanh . '</span>
        <span class="price">' . $giokhoihanh . '</span>
        <span class="price">' . $banggia . '</span>
        <form action="index.php?act=addcart" method="post">
        <input type="hidden" name="tentuyen" value="' . $tentuyen . '">
        <input type="hidden" name="diemdi" value="' . $diemdi . '">
        <input type="hidden" name="diemden" value="' . $diemden . '">
        <input type="hidden" name="ngaykhoihanh" value="' . $ngaykhoihanh . '">
        <input type="hidden" name="giokhoihanh" value="' . $giokhoihanh . '">
        <input type="hidden" name="banggia" value="' . $banggia . '">
        <input type="hidden" name="soluong" value="1">
        <button type="submit" name="addcart">Đặt Vé</button>
         </form>
      
    </div>';
  }
  return $php_chuyenxe_new;
}
