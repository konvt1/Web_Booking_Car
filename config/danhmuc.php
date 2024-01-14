<?php
function getall_dm()
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM tuyenxe");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}
function getonedm($id)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM tuyenxe Where matuyen=" . $id);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}
function deldm($id)
{
  $conn = connectdb();

  try {
    $stmt = $conn->prepare("DELETE FROM tuyenxe WHERE matuyen = :id");
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $deletedRows = $stmt->rowCount();

    if ($deletedRows > 0) {
      echo "Xóa tuyến thành công!";
    } else {
      echo "Không có bản ghi nào được xóa.";
    }
  } catch (PDOException $e) {
    if ($e->errorInfo[1] == 1451) {
   
      echo "Không thể xóa tuyến vì có các bản ghi liên quan trong các bảng khác.";
    } else {
 
      echo "Lỗi hệ thống: " . $e->getMessage();
    }
  } finally {
    // Ngắt kết nối database
    $conn = null;
  }
}

function updatedm($matuyen, $tentuyen, $diemdau, $thoigian)
{

  $conn = connectdb();
  try {

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "UPDATE tuyenxe SET tentuyen='" . $tentuyen . "',diemdau='" . $diemdau . "',thoigian='" . $thoigian . "' WHERE matuyen=" . $matuyen;


    $stmt = $conn->prepare($sql);

    $stmt->execute();


    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
}
function themdm( $tentuyen, $diemdau, $thoigian)
{

$conn = connectdb();


  $sql = "INSERT INTO tuyenxe (tentuyen, diemdau, thoigian)
  VALUES ('".$tentuyen."', '".$diemdau."', '".$thoigian."')";
 
  $conn->exec($sql);
  echo " thêm thành công";

}


// index user
function tuyenxe_all(){
  try {
    $conn = connectdb();
    $sql = "SELECT * FROM tuyenxe ORDER BY matuyen DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    return false;
  }
}
function showdm($cxdm ){
  $php_tuyenxe = '';
foreach ($cxdm as $dm) {
    extract($dm);
    $link='index.php?act=chuyenxe&iddm='.$matuyen;
    $php_tuyenxe .= '<a href="'.$link.'">'.$tentuyen.'</a>';
}
return $php_tuyenxe;

}
//admin 
function showdm_admin($cxdm ){
  $php_tuyenxe = '';
foreach ($cxdm as $dm) {
    extract($dm);
    $link='index.php?act=chuyenxe&iddm='.$matuyen;
    $php_tuyenxe .=    '<option value="'.$matuyen.'">'.$tentuyen.'</option>';
}
return $php_tuyenxe;

}
?>
