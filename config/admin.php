<?php
function checkUser($user, $pass) {
  try {
      $conn = connectdb(); 

      $sql = "SELECT * FROM taixe WHERE user = ? AND pass = ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$user, $pass]);

      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      return $result;
      // if ($result && isset($result['id'])) {

      //     return $result['id'];
      // } else {

      //     return 0;
      // }
  } catch (PDOException $e) {

      echo "Error: " . $e->getMessage();
  }
}
function users_insert($tenkh, $ngaysinh,$gioitinh, $diachi,$sdt,$email, $cmnd, $user,$pass){
  $conn = connectdb();
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO khachhang (tenkh, ngaysinh, gioitinh, diachi, sdt, email,cmnd , user, pass) VALUES (?, ?, ?, ?, ?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$tenkh, $ngaysinh,$gioitinh, $diachi,$sdt,$email, $cmnd, $user,$pass]);
  $conn = null;
}
function getall_user()
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM khachhang");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}
?>