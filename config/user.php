<?php

function user_insert($user,$pass,$email ){

    $conn = connectdb();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO khachhang (user, pass, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user, $pass, $email]);
    $conn = null;
}


function checkUser($user, $pass) {
  try {
      $conn = connectdb(); 

      $sql = "SELECT * FROM khachhang WHERE user = ? AND pass = ?";
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
// function get_user($id){
//   $conn = connectdb(); 

//   $sql = "SELECT * FROM khachhang WHERE id = ?";
//   $stmt = $conn->prepare($sql);
//   $stmt->execute([$id]);
//   $result = $stmt->fetch(PDO::FETCH_ASSOC);

//  return $result;


// }
function get_user($id) {
  $conn = connectdb();

  $sql = "SELECT id, tenkh, ngaysinh, gioitinh, diachi, sdt, email, cmnd, user, pass, role FROM khachhang WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  // Ẩn mật khẩu bằng cách thay thế nó bằng dấu *
  if (isset($result['pass'])) {
      $result['pass'] = str_repeat('*', strlen($result['pass']));
  }

  return $result;
}
function update_user($user, $pass, $tenkh, $ngaysinh, $gioitinh, $diachi, $sdt, $email, $cmnd, $id, $role) {
  try {
      $conn = connectdb();
      
      $sql = "UPDATE khachhang SET user=?, pass=?, tenkh=?, ngaysinh=?, gioitinh=?, diachi=?, sdt=?, email=?, cmnd=?, role=? WHERE id=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$user, $pass, $tenkh, $ngaysinh, $gioitinh, $diachi, $sdt, $email, $cmnd, $role, $id]);
      
      
      return true;
  } catch (PDOException $e) {
    
      echo "Error: " . $e->getMessage();
      
  
      return false;
  }
}
function user_insert_id($user,$pass,$tenkh,$diachi,$email,$sdt ){

  $conn = connectdb();

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  $sql = "INSERT INTO khachhang (tenkh, user, pass, email, sdt, diachi) VALUES (?, ?, ?, ?,?,?)";
  $stmt = $conn->prepare($sql);

  
  $stmt->execute([$tenkh,$user,$pass,$diachi,$email,$sdt]);



  $conn = null;
  return pdo_execute_id($sql, $user,$pass,$tenkh,$diachi,$email,$sdt);
}
