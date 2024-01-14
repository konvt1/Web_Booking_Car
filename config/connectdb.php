<?php
function connectdb()
{
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=test3", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
  //  echo "Connection failed: " . $e->getMessage();
  }
  return $conn;
}
function pdo_execute_id($sql) {
  $sql_args = array_slice(func_get_args(), 1);
  try {
      $conn = connectdb();
      $stmt = $conn->prepare($sql);
      $stmt->execute($sql_args);
      return $conn->lastInsertId();
  } catch (PDOException $e) {
      throw $e;
  } finally {
      unset($conn);
  }
}
?>