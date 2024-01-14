<?php


function getSeatData($mavexe)
{
  try {
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM seats WHERE mavexe = ?");
    $stmt->bindParam(1, $mavexe);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    return [];
  } finally {
    $conn = null;
  }
}
function getall_donhang()

{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM dondatve");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}

function deldon($id)
{

  $conn = connectdb();
  try {


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM dondatve WHERE madondatve = " . $id;


    $conn->exec($sql);
  } catch (PDOException $e) {
  }

  $conn = null;
}

function bill_insert($machuyenxe, $ten_nguoidat, $diachi_nguoidat, $dienthoai_nguoidat, $diemdon, $diemtra, $ngaydat, $giokhachdat, $tong, $pttt)
{

  $conn = connectdb();



  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO dondatve (machuyenxe, ten_nguoidat, diachi_nguoidat, dienthoai_nguoidat, diemdon, diemtra, ngaydat, giokhachdat, tong, pttt)
    VALUES ('" . $machuyenxe . "','" . $ten_nguoidat . "', '" . $diachi_nguoidat . "', '" . $dienthoai_nguoidat . "','" . $diemdon . "','" . $diemtra . "','" . $ngaydat . "','" . $giokhachdat . "',,'" . $tong . "',,'" . $pttt . "')";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$machuyenxe, $ten_nguoidat, $diachi_nguoidat, $dienthoai_nguoidat, $diemdon, $diemtra, $ngaydat, $giokhachdat, $tong, $pttt]);
  $conn = null;
}
// function taodonhang($mave, $machuyenxe, $ten_nguoidat, $diachi_nguoidat, $dienthoai_nguoidat, $diemdon, $diemtra, $ngaydat, $giokhachdat, $pttt)
// {
//   try {
//   $conn = connectdb();



//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO dondatve (mave,machuyenxe, ten_nguoidat, diachi_nguoidat, dienthoai_nguoidat, diemdon, diemtra, ngaydat, giokhachdat, pttt)
//     VALUES ('" . $mave . "','" . $machuyenxe . "','" . $ten_nguoidat . "', '" . $diachi_nguoidat . "', '" . $dienthoai_nguoidat . "','" . $diemdon . "','" . $diemtra . "','" . $ngaydat . "','" . $giokhachdat . "','" . $pttt . "')";
//   $conn->exec($sql);
//   $last_id=$conn->lastInsertId();
//   return $last_id;
// } catch (PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
//   return false;
// }
// }
// function insert_donhang($machuyenxe,$ten_nguoidat,$diachi_nguoidat,$dienthoai_nguoidat,$diemdon,$diemtra,$ngaydat, $giokhachdat, $tong,$pttt){
//   $conn = connectdb();
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO dondatve (machuyenxe,ten_nguoidat, diachi_nguoidat, dienthoai_nguoidat,diemdon,diemtra,ngaydat,giokhachdat,tong,pttt)
//   VALUES ('".$machuyenxe."','".$ten_nguoidat."','".$diachi_nguoidat."','".$dienthoai_nguoidat."','".$diemdon."','".$diemtra."','".$ngaydat."','".$giokhachdat."','".$tong."','".$pttt."')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
// }
function insert_donhang($makn, $mave, $ten_nguoidat, $diachi_nguoidat, $dienthoai_nguoidat, $diemdon, $diemtra, $ngaydat, $giokhachdat, $tong, $pttt) {
  try {
      $conn = connectdb();
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO dondatve (makn,mave, ten_nguoidat, diachi_nguoidat, dienthoai_nguoidat, diemdon, diemtra, ngaydat, giokhachdat, tong, pttt)
              VALUES (:makn,:mave, :ten_nguoidat, :diachi_nguoidat, :dienthoai_nguoidat, :diemdon, :diemtra, :ngaydat, :giokhachdat, :tong, :pttt)";

      $stmt = $conn->prepare($sql);
      $tong=get_tong();

      // Bind parameters
      $stmt->bindParam(':makn', $makn);
      $stmt->bindParam(':mave', $mave);

      $stmt->bindParam(':ten_nguoidat', $ten_nguoidat);
      $stmt->bindParam(':diachi_nguoidat', $diachi_nguoidat);
      $stmt->bindParam(':dienthoai_nguoidat', $dienthoai_nguoidat);
      $stmt->bindParam(':diemdon', $diemdon);
      $stmt->bindParam(':diemtra', $diemtra);
      $stmt->bindParam(':ngaydat', $ngaydat);
      $stmt->bindParam(':giokhachdat', $giokhachdat);
      $stmt->bindParam(':tong', $tong);
      $stmt->bindParam(':pttt', $pttt);

      $stmt->execute();
      $last_id=$conn->lastInsertId();
      
       return $last_id;

      // Execute the query
      
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}
function getonedh($id)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM dondatve WHERE madondatve = :id");
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}